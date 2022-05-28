<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FranchiseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $franchise;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($franchise)
    {
       $this->franchise = $franchise;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('thanks for business submitted')->markdown('emails.franchise');
    }
}
