<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class OrderRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $file;

    public function __construct(array $data, $file = null)
    {
        $this->data = $data;
        $this->file = $file;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->data['submission_type'] === 'existing_order' 
            ? 'Nouveau Bon de Commande Transmis - ' . $this->data['company_name']
            : 'Nouvelle Demande de Devis/Besoin - ' . $this->data['company_name'];

        return new Envelope(
            from: new Address('direction@sureowncompany.com', 'SureOwn Order System'),
            replyTo: [
                new Address($this->data['email'], $this->data['contact_person']),
            ],
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.order-request-mail',
            with: [
                'data' => $this->data,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        $attachments = [];

        if ($this->file) {
            $attachments[] = Attachment::fromPath($this->file->getRealPath())
                ->as($this->file->getClientOriginalName())
                ->withMime($this->file->getMimeType());
        }

        return $attachments;
    }
}
