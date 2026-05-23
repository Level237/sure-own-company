<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address; // Import important
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // L'expéditeur DOIT être l'adresse authentifiée sur ton SMTP
            from: new Address('webform@sureowncompany.com', 'SureOwn Contact Form'),

            // Le Reply-To permet de répondre directement au client
            replyTo: [
                new Address($this->data['email'], $this->data['first_name'] . ' ' . $this->data['last_name']),
            ],

            subject: 'Nouveau message de contact - SureOwn',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.contact-mail',
            with: [
                'data' => $this->data,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}