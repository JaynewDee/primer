<?php

namespace App\Notifications;

use App\Models\Meep;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Str;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewMeep extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Meep $meep)
    {

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line("You've just been meeped!")
                    ->action('Notification Action', url('/'))
                    ->subject("New meep from {$this->meep->user->name}")
                    ->greeting("New meep from {$this->meep->user->name}")
                    ->line(Str::limit($this->meep->message, 50))
                    ->action('Go to Meep', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
