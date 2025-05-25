<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AvisMail extends Mailable
{
    use Queueable, SerializesModels;

    public $avisData;

    public function __construct($avisData)
    {
        $this->avisData = $avisData;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->subject('Nouvel avis client - Élégance Vibe')
                    ->view('emails.avis')
                    ->text('emails.avis_text');
    }
}