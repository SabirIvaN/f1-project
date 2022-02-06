<?php

namespace Tests\Feature\Notifications;

use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use App\Notifications\Client\OrderNotification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    private Collection $city;
    private Collection $service;

    private array $data;
    private array $order;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');

        $this->service = Service::factory()->count(3)->create();
        $this->city    = City::factory()->count(10)->create();
        $this->order   = Order::factory()->make()->toArray();

        $this->data = array_merge(
            [
                'city_id'    => $this->city->random()->id,
                'service_id' => $this->service->random()->id,
            ],
            $this->order
        );
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
        $this
            ->post(route('order.store'), $this->data)
            ->assertSessionHasNoErrors()
            ->assertRedirect();

        Notification::assertSentTo(new AnonymousNotifiable(), OrderNotification::class);
    }
}
