<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use RuntimeException;

class MicrosoftGraphMailService
{
    private function obtenerToken(): string
    {
        $tenant = config('graph.tenant_id');
        $client = config('graph.client_id');
        $secret = config('graph.client_secret');

        if (!$tenant || !$client || !$secret) {
            throw new RuntimeException(
                'Faltan credenciales de Microsoft Graph.'
            );
        }

        $response = Http::asForm()
            ->timeout(30)
            ->post(
                "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/token",
                [
                    'client_id' => $client,
                    'client_secret' => $secret,
                    'scope' => 'https://graph.microsoft.com/.default',
                    'grant_type' => 'client_credentials',
                ]
            );

        $response->throw();

        $token = $response->json('access_token');

        if (!$token) {
            throw new RuntimeException(
                'Microsoft Graph no devolvió un token.'
            );
        }

        return $token;
    }

    public function enviar(
        string $destinatario,
        string $asunto,
        string $contenidoHtml,
        ?string $respuestaA = null,
        ?array $adjunto = null
    ): void {
        $remitente = config('graph.sender');

        if (!$remitente) {
            throw new RuntimeException(
                'No se configuró el remitente de Microsoft Graph.'
            );
        }

        $mensaje = [
            'subject' => $asunto,
            'body' => [
                'contentType' => 'HTML',
                'content' => $contenidoHtml,
            ],
            'toRecipients' => [
                [
                    'emailAddress' => [
                        'address' => $destinatario,
                    ],
                ],
            ],
        ];

        if ($respuestaA) {
            $mensaje['replyTo'] = [
                [
                    'emailAddress' => [
                        'address' => $respuestaA,
                    ],
                ],
            ];
        }

        if ($adjunto) {
            $mensaje['attachments'] = [
                [
                    '@odata.type' => '#microsoft.graph.fileAttachment',
                    'name' => $adjunto['nombre'],
                    'contentType' => $adjunto['tipo'],
                    'contentBytes' => base64_encode(
                        $adjunto['contenido']
                    ),
                ],
            ];
        }

        $response = Http::withToken(
                $this->obtenerToken()
            )
            ->acceptJson()
            ->timeout(60)
            ->post(
                'https://graph.microsoft.com/v1.0/users/' .
                rawurlencode($remitente) .
                '/sendMail',
                [
                    'message' => $mensaje,
                    'saveToSentItems' => true,
                ]
            );

        $response->throw();

        if ($response->status() !== 202) {
            throw new RuntimeException(
                'Microsoft Graph no confirmó la aceptación del envío.'
            );
        }
    }
}
