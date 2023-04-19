<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventToClient extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $monthwise;
    public $event;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event, $monthwise, $email)
    {
        $this->event = $event;
        $this->monthwise = $monthwise;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Detail about upcoming Exhbition')->view('emails.EventToClient');
    }
}
