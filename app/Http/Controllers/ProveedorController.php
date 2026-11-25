<?php

namespace App\Http\Controllers;

use App\Services\MicrosoftGraphMailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\File;

class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedores');
    }

    public function enviar(
        Request $request,
        MicrosoftGraphMailService $graph
    ) {
        $datos = $request->validate([
            'empresa' => ['required', 'string', 'max:255'],
            'contacto' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefono' => ['required', 'string', 'max:30'],

            'categoria' => [
                'required',
                'string',
                'max:150',
                'in:Equipos HVAC,Protección contra incendios,Materiales y suministros,Instalaciones y servicios especializados,Herramientas y refacciones,Otros'
            ],

            'mensaje' => [
                'nullable',
                'string',
                'max:3000'
            ],

            'catalogo' => [
                'required',
                File::types(['pdf'])->max('2mb')
            ],

            'privacidad' => ['accepted'],
        ]);

        try {
            $archivo = $request->file('catalogo');

            if (!$archivo || !$archivo->isValid()) {
                throw new \RuntimeException(
                    'No se recibió un archivo válido.'
                );
            }

            $contenido = file_get_contents(
                $archivo->getRealPath()
            );

            if ($contenido === false) {
                throw new \RuntimeException(
                    'No fue posible leer el catálogo.'
                );
            }

            $adjunto = [
                'nombre' => $archivo->getClientOriginalName(),
                'tipo' => 'application/pdf',
                'contenido' => $contenido,
            ];

            $html = view(
                'emails.solicitud-proveedor',
                ['datos' => $datos]
            )->render();

            $graph->enviar(
                'cotizaciones.contacto@coolingenergyhvac.com',
                'Nueva solicitud de proveedor | Cooling Energy',
                $html,
                $datos['email'],
                $adjunto
            );

            return redirect()
                ->route('proveedores')
                ->with(
                    'success',
                    'Tu información se envió correctamente. Gracias por tu interés en formar parte de nuestra red de proveedores.'
                );

        } catch (\Throwable $e) {

            Log::error(
                'Error al enviar solicitud de proveedor',
                [
                    'error' => $e->getMessage()
                ]
            );

            return back()
                ->withInput(
                    $request->except('catalogo')
                )
                ->with(
                    'error',
                    'No fue posible enviar tu información. Inténtalo nuevamente más tarde.'
                );
        }
    }
}
