<?php

namespace App\Notifications\User;

use App\Helpers\Activist;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderNotification extends Notification
{
    use Queueable;

    private Order $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $order = [
            'name' => [
                'title' =>  __('notification.order.name'),
                'content' => $this->order->name,
            ],
            'phone' => [
                'title' => __('notification.order.phone'),
                'content' => $this->order->phone,
            ],
            'service' => [
                'title' => __('notification.order.service'),
                'content' => Activist::map($this->order->services, 'name'),
            ],
            'price' => [
                'title' => __('notification.order.price'),
                'content' => Activist::map($this->order->services, 'price'),
            ],
            'city' => [
                'title' => __('notification.order.city'),
                'content' => Activist::map($this->order->cities, 'name'),
            ],
            'address' => [
                'title' => __('notification.order.address'),
                'content' => $this->order->address,
            ],
        ];

        return (new MailMessage())
            ->line(__('notification.order.gratitude'))
            ->line(__('notification.order.check'))
            ->markdown('vendor.notifications.order', ['order' => $order]);
    }
}
