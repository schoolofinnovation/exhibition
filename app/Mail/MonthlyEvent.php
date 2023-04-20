<?php

namespace App\Mail;

use App\Models\Event;
use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MonthlyEvent extends Mailable
{
    use Queueable, SerializesModels;
   
    public $xyz;
    public $event;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Event $event, $xyz)
    {
        $this->event = $event;
        $this->xyz = $xyz;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('The Exhibition Network Find Expo for your success')->markdown('emails.monthlyevent');
    }
}
