<?php

namespace App\Mail;

use App\Models\Event;
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
    public function __construct( Event $event)
    {
       $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Detail about upcoming Exhbition')->view('emails.eventtoclient');
    }
}
