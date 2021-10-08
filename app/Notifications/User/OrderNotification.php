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
    private bool $comment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(
        Order $order,
        bool $comment = false,
    ) {
        $this->order = $order;
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via()
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail()
    {
        $rows = [
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
                'content' => Activist::map($this->order->services, 'name')->flatten()[0],
            ],
            'price' => [
                'title' => __('notification.order.price'),
                'content' => Activist::map($this->order->services, 'price')->flatten()[0],
            ],
            'city' => [
                'title' => __('notification.order.city'),
                'content' => Activist::map($this->order->cities, 'name')->flatten()[0],
            ],
            'address' => [
                'title' => __('notification.order.address'),
                'content' => $this->order->address,
            ],
        ];

        if ($this->comment === true) {
            $rows['comment'] = [
                'title' => __('notification.order.comment'),
                'content' => $this->order->comment,
            ];
        }

        return (new MailMessage())
            ->line(__('notification.order.gratitude'))
            ->line(__('notification.order.check'))
            ->markdown('vendor.notifications.order', ['rows' => $rows]);
    }
}
