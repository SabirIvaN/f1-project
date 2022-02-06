<?php

namespace App\Notifications\Dashboard;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;
use Orchid\Platform\Notifications\DashboardChannel;
use Orchid\Platform\Notifications\DashboardMessage;

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
    public function __construct(Order $order, bool $comment = false)
    {
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
        return [
            DashboardChannel::class,
        ];
    }

    /**
     * Get the Orchid representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDashboard()
    {
        return (new DashboardMessage())
            ->title(__('app.notifications.dashboard.order_notification.title'))
            ->message(__('app.notifications.dashboard.order_notification.message'))
            ->action(URL::route('platform.index') . '/crud/view/accepted-order-resources/' . $this->order->id);
    }
}
