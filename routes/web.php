<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProyectoController;
use App\Models\Proyecto;

/*
|--------------------------------------------------------------------------
| INICIO
|--------------------------------------------------------------------------
*/

Route::view('/', 'inicio')
    ->name('inicio');


/*
|--------------------------------------------------------------------------
| NOSOTROS
|--------------------------------------------------------------------------
*/

Route::view('/nosotros', 'nosotros')
    ->name('nosotros');


/*
|--------------------------------------------------------------------------
| SERVICIOS
|--------------------------------------------------------------------------
*/

Route::view('/servicios', 'servicios')
    ->name('servicios');


/*
|--------------------------------------------------------------------------
| PROYECTOS
|--------------------------------------------------------------------------
|
| La información de los proyectos se encuentra en:
| config/proyectos.php
|
*/

/*
|--------------------------------------------------------------------------
| PROYECTOS PÚBLICOS - MYSQL
|--------------------------------------------------------------------------
*/

Route::get('/proyectos', function () {

    $proyectos = Proyecto::query()
        ->where('publicado', true)
        ->orderBy('orden')
        ->orderBy('id')
        ->get()
        ->map(function ($proyecto) {

            return [
                'numero' => $proyecto->numero,
                'nombre' => $proyecto->nombre,
                'slug' => $proyecto->slug,
                'tipo' => $proyecto->especialidad,
                'ubicacion' => $proyecto->ubicacion,
                'year' => $proyecto->periodo,
                'imagen' => $proyecto->imagen_principal,
            ];

        })
        ->values()
        ->all();

    return view('proyectos', compact('proyectos'));

})->name('proyectos');


/*
|--------------------------------------------------------------------------
| DETALLE DE PROYECTO
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| DETALLE DE PROYECTO - MYSQL
|--------------------------------------------------------------------------
*/

Route::get('/proyectos/{slug}', function ($slug) {

    // Obtener únicamente proyectos publicados
    $proyectos = \App\Models\Proyecto::query()
        ->where('publicado', true)
        ->orderBy('orden')
        ->orderBy('id')
        ->get();

    // Buscar el proyecto solicitado
    $actual = $proyectos->firstWhere('slug', $slug);

    abort_unless($actual, 404);

    // Convertir el modelo al formato de la vista actual
    $convertir = function ($item) {
        if (!$item) {
            return null;
        }

        return [
            'numero' => $item->numero,
            'nombre' => $item->nombre,
            'ubicacion' => $item->ubicacion,
            'periodo' => $item->periodo,
            'especialidad' => $item->especialidad,
            'tipo' => $item->tipo,
            'categoria' => $item->categoria,
            'descripcion' => $item->descripcion,
            'alcance' => $item->alcance,
            'imagen_principal' => $item->imagen_principal,
            'galeria' => is_array($item->galeria)
                ? $item->galeria
                : (json_decode($item->galeria ?? '[]', true) ?: []),
        ];
    };

    $proyecto = $convertir($actual);

    // Navegación entre proyectos publicados
    $slugs = $proyectos->pluck('slug')->all();

    $indiceActual = array_search($slug, $slugs, true);

    $anterior = $indiceActual > 0
        ? $slugs[$indiceActual - 1]
        : null;

    $siguiente = $indiceActual < count($slugs) - 1
        ? $slugs[$indiceActual + 1]
        : null;

    $proyectoAnterior = $anterior
        ? $convertir($proyectos->firstWhere('slug', $anterior))
        : null;

    $proyectoSiguiente = $siguiente
        ? $convertir($proyectos->firstWhere('slug', $siguiente))
        : null;

    return view('proyecto-detalle', compact(
        'proyecto',
        'slug',
        'anterior',
        'siguiente',
        'proyectoAnterior',
        'proyectoSiguiente'
    ));

})
->where('slug', '[a-z0-9-]+')
->name('proyectos.show');


/*
|--------------------------------------------------------------------------
| CONTACTO
|--------------------------------------------------------------------------
*/

// Mostrar formulario
Route::view('/contacto', 'contacto')
    ->name('contacto');

// Procesar y enviar formulario
Route::post(
    '/contacto/enviar',
    [ContactoController::class, 'enviar']
)
->middleware('throttle:5,1')
->name('contacto.enviar');


/*
|--------------------------------------------------------------------------
| ADMINISTRACIÓN - COOLING ENERGY
|--------------------------------------------------------------------------
*/

// Acceso para visitantes
Route::middleware('guest')->group(function () {

    Route::get('/admin/login', [AuthController::class, 'mostrarLogin'])
        ->name('admin.login');

    Route::post('/admin/login', [AuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('admin.login.submit');
});

/*
|--------------------------------------------------------------------------
| RUTAS PRIVADAS DEL ADMINISTRADOR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard


        // Dashboard administrativo
        Route::get('/dashboard', function () {

            $totalProyectos = Proyecto::count();

            $publicados = Proyecto::where('publicado', true)
                ->count();

            $ocultos = Proyecto::where('publicado', false)
                ->count();

            return view('admin.dashboard', compact(
                'totalProyectos',
                'publicados',
                'ocultos'
            ));

        })->name('dashboard');



        // Listado de proyectos
        Route::get('/proyectos', [ProyectoController::class, 'index'])
            ->name('proyectos.index');

        // Formulario para crear proyectos
        Route::get('/proyectos/crear', [ProyectoController::class, 'create'])
            ->name('proyectos.create');

        // Guardar nuevos proyectos
        Route::post('/proyectos', [ProyectoController::class, 'store'])
            ->name('proyectos.store');

        // Cerrar sesión
        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');

        Route::patch(
    '/proyectos/{proyecto}/estado',
    [ProyectoController::class, 'cambiarEstado']
)->name('proyectos.estado');


// Mostrar formulario para editar un proyecto
Route::get(
    '/proyectos/{proyecto}/editar',
    [ProyectoController::class, 'edit']
)->name('proyectos.edit');

// Guardar cambios de un proyecto
Route::put(
    '/proyectos/{proyecto}',
    [ProyectoController::class, 'update']
)->name('proyectos.update');


Route::delete(
    '/proyectos/{proyecto}',
    [ProyectoController::class, 'destroy']
)->name('proyectos.destroy');


    });


/*
|--------------------------------------------------------------------------
| PROVEEDORES - COOLING ENERGY
|--------------------------------------------------------------------------
| Formulario público para recibir catálogos de proveedores.
*/

Route::get('/proveedores', [ProveedorController::class, 'index'])
    ->name('proveedores');

Route::post('/proveedores/enviar', [ProveedorController::class, 'enviar'])
    ->middleware('throttle:3,10')
    ->name('proveedores.enviar');


