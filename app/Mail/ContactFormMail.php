<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $formData;
    public $filePath;
    // public $fileName;
    // protected $fileUrl;

    /**
     * Create a new message instance.
     */
    public function __construct($formData, $filePath)
    {
        
        $this->formData = $formData;
    
        $this->filePath = $filePath;

        // $this->fileName = $fileName;

    
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'E-Mail von Kontaktformular',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact_form',
            with: ['formData' => $this->formData]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if($this->filePath && file_exists(storage_path('app/' . $this->filePath))){
            $attachments = [
                Attachment::fromPath(storage_path('app/' . $this->filePath))
            ];
        }
        return $attachments;


        // return [];
    }
}
