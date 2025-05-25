<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    public function __construct($contactData)
    {
        $this->contactData = $contactData;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->subject('Nouveau message de contact - Élégance Vibe')
                    ->view('emails.contact')
                    ->text('emails.contact_text');
    }
} 