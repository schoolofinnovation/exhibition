<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $appliedjobs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appliedjobs)
    {
        $this->appliedjobs = $appliedjobs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Application Submiitted')->markdown('emails.career');
    }
}
