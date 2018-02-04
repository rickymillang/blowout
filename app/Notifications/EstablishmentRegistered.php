<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EstablishmentRegistered extends Notification
{
    use Queueable;

    protected $establishment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($establishment)
    {
        $this->establishment = $establishment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toDatabase($notifiable)
    {
        return $this->establishment;
    }
}
