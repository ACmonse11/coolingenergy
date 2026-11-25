<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class ProyectoController extends Controller
{
    /**
     * Mostrar todos los proyectos.
     */
    public function index()
    {
        $proyectos = Proyecto::orderBy('orden')
            ->orderBy('id')
            ->get();

        return view(
            'admin.proyectos.index',
            compact('proyectos')
        );
    }

    /**
     * Mostrar formulario de nuevo proyecto.
     */
    public function create()
    {
        return view('admin.proyectos.create');
    }

    /**
     * Guardar nuevo proyecto.
     */
    public function store(Request $request)
    {
        // 1. Validar información
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'ubicacion' => ['nullable', 'string', 'max:255'],
            'periodo' => ['nullable', 'string', 'max:50'],
            'especialidad' => ['nullable', 'string', 'max:255'],
            'tipo' => ['nullable', 'string', 'max:255'],
            'categoria' => ['nullable', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string'],
            'alcance' => ['nullable', 'string'],

            'imagen_principal' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],

            'galeria' => [
                'nullable',
                'array',
                'max:30',
            ],

            'galeria.*' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
        ]);

        // Archivos que se guardarán durante el proceso
        $archivosGuardados = [];

        try {

            // 2. Generar identificador único
            $slug = Str::slug($datos['nombre'])
                . '-' . Str::lower(Str::random(8));

            while (Proyecto::where('slug', $slug)->exists()) {
                $slug = Str::slug($datos['nombre'])
                    . '-' . Str::lower(Str::random(8));
            }

            // 3. Crear carpeta para el proyecto
            $carpeta = 'proyectos/' . $slug;

            // 4. Guardar banner
            $banner = $request
                ->file('imagen_principal')
                ->store($carpeta . '/banner', 'public');

            if (!$banner) {
                throw new \RuntimeException(
                    'No se pudo guardar el banner.'
                );
            }

            $archivosGuardados[] = $banner;

            // 5. Guardar galería
            $galeria = [];

            foreach ($request->file('galeria', []) as $imagen) {

                $ruta = $imagen->store(
                    $carpeta . '/galeria',
                    'public'
                );

                if (!$ruta) {
                    throw new \RuntimeException(
                        'No se pudo guardar una fotografía.'
                    );
                }

                $archivosGuardados[] = $ruta;

                $galeria[] = '/storage/' . $ruta;
            }

            // 6. Guardar información en MySQL
            DB::transaction(function () use (
                $datos,
                $slug,
                $banner,
                $galeria
            ) {

                $orden = ((int) Proyecto::max('orden')) + 1;

                Proyecto::create([
                    'slug' => $slug,

                    'numero' => str_pad(
                        $orden,
                        2,
                        '0',
                        STR_PAD_LEFT
                    ),

                    'nombre' => $datos['nombre'],
                    'ubicacion' => $datos['ubicacion'] ?? null,
                    'periodo' => $datos['periodo'] ?? null,
                    'especialidad' => $datos['especialidad'] ?? null,
                    'tipo' => $datos['tipo'] ?? null,
                    'categoria' => $datos['categoria'] ?? null,
                    'descripcion' => $datos['descripcion'] ?? null,
                    'alcance' => $datos['alcance'] ?? null,

                    'imagen_principal' => '/storage/' . $banner,

                    'galeria' => $galeria,

                    'publicado' => false,

                    'orden' => $orden,
                ]);
            });

            // 7. Regresar al administrador
            return redirect()
                ->route('admin.proyectos.index')
                ->with(
                    'success',
                    'El proyecto se registró correctamente. Está oculto hasta que decidas publicarlo.'
                );

        } catch (Throwable $e) {

            // 8. Limpiar archivos si ocurre un error
            foreach ($archivosGuardados as $archivo) {
                Storage::disk('public')->delete($archivo);
            }

            report($e);

            return back()
                ->withInput()
                ->withErrors([
                    'general' => 'No fue posible guardar el proyecto. Inténtalo nuevamente.',
                ]);
        }
    }


/**
 * Publicar u ocultar un proyecto.
 */
public function cambiarEstado(Proyecto $proyecto)
{
    $proyecto->publicado = ! $proyecto->publicado;

    $proyecto->save();

    $mensaje = $proyecto->publicado
        ? 'El proyecto se publicó correctamente.'
        : 'El proyecto se ocultó correctamente.';

    return redirect()
        ->route('admin.proyectos.index')
        ->with('success', $mensaje);
}


/**
 * Mostrar formulario de edición.
 */
public function edit(Proyecto $proyecto)
{
    return view(
        'admin.proyectos.edit',
        compact('proyecto')
    );
}


/**
 * Actualizar un proyecto existente.
 */
public function update(Request $request, Proyecto $proyecto)
{
    // 1. Validar los campos
    $datos = $request->validate([
        'nombre' => ['required', 'string', 'max:255'],
        'ubicacion' => ['nullable', 'string', 'max:255'],
        'periodo' => ['nullable', 'string', 'max:50'],
        'especialidad' => ['nullable', 'string', 'max:255'],
        'tipo' => ['nullable', 'string', 'max:255'],
        'categoria' => ['nullable', 'string', 'max:255'],
        'descripcion' => ['nullable', 'string'],
        'alcance' => ['nullable', 'string'],

        'imagen_principal' => [
            'nullable',
            'image',
            'mimes:jpg,jpeg,png,webp',
            'max:10240',
        ],

        'galeria' => ['nullable', 'array', 'max:30'],

        'galeria.*' => [
            'required',
            'image',
            'mimes:jpg,jpeg,png,webp',
            'max:10240',
        ],

        'eliminar_galeria' => ['nullable', 'array'],
        'eliminar_galeria.*' => ['integer', 'min:0'],
    ]);

    // 2. Recuperar las fotografías existentes
    $galeriaOriginal = $proyecto->galeria ?? [];

    $indicesEliminar = array_unique(
        array_map(
            'intval',
            $datos['eliminar_galeria'] ?? []
        )
    );

    // Verificar que los índices correspondan
    // a fotografías existentes
    foreach ($indicesEliminar as $indice) {
        if (!array_key_exists($indice, $galeriaOriginal)) {
            return back()
                ->withInput()
                ->withErrors([
                    'galeria' => 'Una fotografía seleccionada no existe.',
                ]);
        }
    }

    $galeriaFinal = [];
    $archivosRetirar = [];

    foreach ($galeriaOriginal as $indice => $imagen) {
        if (in_array($indice, $indicesEliminar, true)) {
            $archivosRetirar[] = $imagen;
        } else {
            $galeriaFinal[] = $imagen;
        }
    }

    $nuevasImagenes = $request->file('galeria', []);

    // 3. Limitar la galería a 30 fotografías
    if (count($galeriaFinal) + count($nuevasImagenes) > 30) {
        return back()
            ->withInput()
            ->withErrors([
                'galeria' => 'La galería no puede superar las 30 fotografías.',
            ]);
    }

    $archivosNuevos = [];
    $bannerAnterior = $proyecto->imagen_principal;
    $bannerFinal = $bannerAnterior;

    try {
        // 4. Carpeta exclusiva del proyecto
        $carpeta = 'proyectos/' . $proyecto->slug;

        // 5. Reemplazar banner si se seleccionó uno
        if ($request->hasFile('imagen_principal')) {
            $rutaBanner = $request
                ->file('imagen_principal')
                ->store($carpeta . '/banner', 'public');

            if (!$rutaBanner) {
                throw new \RuntimeException(
                    'No se pudo guardar el banner.'
                );
            }

            $archivosNuevos[] = $rutaBanner;
            $bannerFinal = '/storage/' . $rutaBanner;
        }

        // 6. Agregar nuevas fotografías
        foreach ($nuevasImagenes as $imagen) {
            $ruta = $imagen->store(
                $carpeta . '/galeria',
                'public'
            );

            if (!$ruta) {
                throw new \RuntimeException(
                    'No se pudo guardar una fotografía.'
                );
            }

            $archivosNuevos[] = $ruta;
            $galeriaFinal[] = '/storage/' . $ruta;
        }

        // 7. Actualizar MySQL
        DB::transaction(function () use (
            $proyecto,
            $datos,
            $bannerFinal,
            $galeriaFinal
        ) {
            $proyecto->update([
                'nombre' => $datos['nombre'],
                'ubicacion' => $datos['ubicacion'] ?? null,
                'periodo' => $datos['periodo'] ?? null,
                'especialidad' => $datos['especialidad'] ?? null,
                'tipo' => $datos['tipo'] ?? null,
                'categoria' => $datos['categoria'] ?? null,
                'descripcion' => $datos['descripcion'] ?? null,
                'alcance' => $datos['alcance'] ?? null,
                'imagen_principal' => $bannerFinal,
                'galeria' => $galeriaFinal,
            ]);
        });

    } catch (\Throwable $e) {

        // Limpiar archivos nuevos si falla el proceso
        foreach ($archivosNuevos as $archivo) {
            Storage::disk('public')->delete($archivo);
        }

        report($e);

        return back()
            ->withInput()
            ->withErrors([
                'general' => 'No fue posible actualizar el proyecto.',
            ]);
    }

    // 8. Retirar archivos reemplazados
    // únicamente del directorio de este proyecto
    if ($bannerAnterior !== $bannerFinal) {
        $archivosRetirar[] = $bannerAnterior;
    }

    $prefijoSeguro = 'proyectos/' . $proyecto->slug . '/';

    foreach ($archivosRetirar as $archivo) {
        if (!is_string($archivo)) {
            continue;
        }

        if (!str_starts_with($archivo, '/storage/')) {
            continue;
        }

        $ruta = substr($archivo, strlen('/storage/'));

        if (
            str_starts_with($ruta, $prefijoSeguro) &&
            !str_contains($ruta, '..')
        ) {
            try {
                Storage::disk('public')->delete($ruta);
            } catch (\Throwable $e) {
                report($e);
            }
        }
    }

    // 9. Regresar al listado
    return redirect()
        ->route('admin.proyectos.index')
        ->with(
            'success',
            'El proyecto se actualizó correctamente.'
        );
}


/**
 * Eliminar un proyecto.
 */
public function destroy(Proyecto $proyecto)
{
    $slug = $proyecto->slug;

    // Identificar únicamente la carpeta administrada
    // por Laravel para este proyecto.
    $carpeta = 'proyectos/' . $slug;

    try {
        // Eliminar el registro de MySQL
        $proyecto->delete();

    } catch (\Throwable $e) {
        report($e);

        return back()->with(
            'error',
            'No fue posible eliminar el proyecto.'
        );
    }

    // Eliminar archivos del proyecto después de
    // eliminar correctamente el registro.
    // Nunca borrar la carpeta pública de proyectos.
    if (
        preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $slug)
        && Storage::disk('public')->exists($carpeta)
    ) {
        try {
            Storage::disk('public')->deleteDirectory($carpeta);
        } catch (\Throwable $e) {
            report($e);
        }
    }

    return redirect()
        ->route('admin.proyectos.index')
        ->with(
            'success',
            'El proyecto se eliminó correctamente.'
        );
}


}


