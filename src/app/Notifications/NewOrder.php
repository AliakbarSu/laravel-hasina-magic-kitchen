<?php

namespace App\Notifications;

use App\Models\Orders;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class NewOrder extends Notification
{
    use Queueable;

    private Orders $order;

    /**
     * Create a new notification instance.
     */
    public function __construct(Orders $order)
    {
        $this->order = $order;
    }

    public function toNexmo($notifiable)
    {
        return [
            'to' => env('SMS_TO'),
            'text' => 'New Order' . $this->order->id,
        ];
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
        Log::info('New order notification sent', ['order_id' => $this->order->id]);
        return (new MailMessage())
            ->greeting('New Order')
            ->action('View Order', url('/'))
            ->line('There is a new order!');
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
