<?php

namespace App\Http\Controllers;

use App\Services\MicrosoftGraphMailService;
use Illuminate\Http\Request;
use Throwable;

class ContactoController extends Controller
{
    public function enviar(
        Request $request,
        MicrosoftGraphMailService $graph
    ) {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:255'],
            'telefono' => ['nullable', 'string', 'max:30'],
            'empresa' => ['nullable', 'string', 'max:150'],
            'ubicacion' => ['nullable', 'string', 'max:150'],
            'tipo_proyecto' => [
                'nullable',
                'in:hvac,pci,electrico,hidrosanitario,construccion,otro'
            ],
            'duracion' => [
                'nullable',
                'in:menos-3-meses,3-6-meses,6-12-meses,mas-12-meses,por-definir'
            ],
            'etapa' => [
                'nullable',
                'in:planeacion,ingenieria,construccion,operacion'
            ],
            'mensaje' => ['required', 'string', 'max:5000'],
        ]);

        try {
            // Conservamos la plantilla HTML existente.
            $html = view(
                'emails.solicitud-contacto',
                ['datos' => $datos]
            )->render();

            // Enviamos mediante Microsoft Graph.
            $graph->enviar(
                config('mail.contact_recipient'),
                'Nueva solicitud de proyecto | Cooling Energy',
                $html,
                $datos['email']
            );

            return back()->with(
                'success',
                'Tu solicitud fue enviada correctamente.'
            );

        } catch (Throwable $e) {
            report($e);

            return back()->withInput()->with(
                'error',
                'No fue posible enviar tu solicitud. Intenta nuevamente.'
            );
        }
    }
}
