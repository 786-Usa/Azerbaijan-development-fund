<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class CustomResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $url; // ✅ explicitly declare property

    /**
     * Create a new message instance.
     */
    public function __construct($url)
    {
        $this->url = $url; // ✅ assign it
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Reset Your Password')
                    ->markdown('emails.password.reset')
                    ->with([
                        'url' => $this->url, // ✅ pass it to blade view
                    ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Custom Reset Password Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.password.reset',
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
