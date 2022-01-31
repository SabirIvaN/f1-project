<?php

namespace App\Notifications\Client;

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
    public function __construct(Order $order, bool $comment = false) {
        $this->order   = $order;
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
                'header'  => __('app.notifications.client.order_notification.name.header'),
                'content' => $this->order->name,
            ],
            'phone' => [
                'header'  => __('app.notifications.client.order_notification.phone.header'),
                'content' => $this->order->phone,
            ],
            'service' => [
                'header'  => __('app.notifications.client.order_notification.service.header'),
                'content' => Activist::map($this->order->services, 'name')->flatten()[0],
            ],
            'city' => [
                'header'  => __('app.notifications.client.order_notification.city.header'),
                'content' => Activist::map($this->order->cities, 'name')->flatten()[0],
            ],
            'address' => [
                'header'  => __('app.notifications.client.order_notification.address.header'),
                'content' => $this->order->address,
            ],
        ];

        if ($this->comment === true) {
            $rows['comment'] = [
                'header'  => __('app.notifications.client.order_notification.comment.header'),
                'content' => $this->order->comment,
            ];
        }

        return (new MailMessage())
            ->line(__('app.notifications.client.order_notification.gratitude.line'))
            ->line(__('app.notifications.client.order_notification.check.line'))
            ->markdown('vendor.notifications.order', ['rows' => $rows]);
    }
}
