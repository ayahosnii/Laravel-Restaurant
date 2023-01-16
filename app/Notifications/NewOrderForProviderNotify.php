<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrderForProviderNotify extends Notification implements ShouldQueue, ShouldBroadcast
{
    use Queueable;

    protected $orderItem;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($orderItem)
    {
        $this->orderItem = $orderItem;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'product_id' => $this->orderItem->id,
            'order_id' => $this->orderItem->order->id,
            'price' => $this->orderItem->price,
            'quantity' => $this->orderItem->qty,
        ];
    }
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'data' => [
                'product_id' => $this->orderItem->id,
                'order_id' => $this->orderItem->order->id,
                'price' => $this->orderItem->price,
                'quantity' => $this->orderItem->qty,
            ]
        ]);
    }
}
