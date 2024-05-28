<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * data o informacion que se envia al correo
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**envio de la data*/

    public function build()
    {
        return $this->from('practicas@tmcapacitacion.cl', 'Automated System for Sending Notifications'
        )->subject('A user send you a new message')->view('email.contact-form', ['data' => $this->data]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'ContactForm',
        );
    }

    /**
     * vista del formulario con los datos a enviar
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.contact-form'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
