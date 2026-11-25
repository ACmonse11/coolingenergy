<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SolicitudProveedorMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $datos,
        protected $catalogo
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nueva solicitud de proveedor | Cooling Energy',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.solicitud-proveedor',
            with: [
                'datos' => $this->datos,
            ],
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromPath(
                $this->catalogo->getRealPath()
            )
                ->as('catalogo-proveedor.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
