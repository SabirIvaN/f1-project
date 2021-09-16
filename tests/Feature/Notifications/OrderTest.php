<?php

namespace Tests\Feature\Notifications;

use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use App\Notifications\User\OrderNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    private City $city;
    private Service $service;
    private array $order;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');

        $this->user = User::factory()->create();
        $this->city = City::factory()->create();
        $this->service = Service::factory()->create();
        $this->order = Order::factory()
            ->for($this->city)
            ->for($this->service)
            ->make()
            ->toArray();
    }

    /**
     * Testing the send notification function.
     *
     * @return void
     */
    public function testSend()
    {
        Notification::fake();

        $this->withoutMiddleware();
        $this->post(route('order.store'), $this->order);

        Notification::assertSentTo(new AnonymousNotifiable, OrderNotification::class);
    }
}
