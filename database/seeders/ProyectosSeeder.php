<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectosSeeder extends Seeder
{
    public function run(): void
    {
        $proyectos = config('proyectos', []);

        foreach ($proyectos as $slug => $datos) {

            // Normalizar las rutas de imágenes
            $galeria = array_map(
                fn ($imagen) => str_replace('\\', '/', $imagen),
                $datos['galeria'] ?? []
            );

            Proyecto::updateOrCreate(
                ['slug' => $slug],
                [
                    'numero' => $datos['numero'] ?? null,
                    'nombre' => $datos['nombre'],
                    'ubicacion' => $datos['ubicacion'] ?? null,
                    'periodo' => $datos['periodo'] ?? null,
                    'especialidad' => $datos['especialidad'] ?? null,
                    'tipo' => $datos['tipo'] ?? null,
                    'categoria' => $datos['categoria'] ?? null,
                    'descripcion' => $datos['descripcion'] ?? null,
                    'alcance' => $datos['alcance'] ?? null,
                    'imagen_principal' => str_replace(
                        '\\',
                        '/',
                        $datos['imagen_principal'] ?? ''
                    ),
                    'galeria' => $galeria,
                    'publicado' => true,
                    'orden' => (int) ($datos['numero'] ?? 0),
                ]
            );
        }
    }
}
