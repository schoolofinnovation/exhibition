<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EventNotify extends Notification
{
    use Queueable;
    private $event;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //return ['mail'];
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    //public function toMail($notifiable)
    //{
      //  return (new MailMessage)
        //            ->line('The introduction to the notification.')
          //          ->action('Notification Action', url('/'))
           //         ->line('Thank you for using our application!');
    //}

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
            'event_id' => $this->event['id'],
            'name' => $this->event['eventname'],
            'view' => $this->event['view_count'],
        ];
    }
}
