<?php

namespace Tests\Feature\Controllers;

use App\Models\City;
use App\Models\Order;
use App\Models\Position;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    private Collection $city;
    private Collection $position;
    private Collection $service;
    private Collection $user;

    private array $data;
    private array $order;

    protected function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate');

        $this->position = Position::factory()->count(2)->create();
        $this->service  = Service::factory()->count(3)->create();
        $this->city     = City::factory()->count(10)->create();
        $this->user     = User::factory()
            ->for($this->position->random())
            ->count(2)
            ->create();
        $this->order = Order::factory()->make()->toArray();

        $this->data = array_merge(
            [
                'city_id'    => $this->city->random()->id,
                'service_id' => $this->service->random()->id
            ],
            $this->order
        );
    }

    /**
     * Testing the create function.
     *
     * @return void
     */
    public function testCreate()
    {
        $this
            ->get(route('order.create', $this->service->random()))
            ->assertOk();
    }

    /**
     * Testing the store function.
     *
     * @return void
     */
    public function testStore()
    {
        $this->withoutMiddleware();
        $this->withoutNotifications();
        $this
            ->post(route('order.store'), $this->data)
            ->assertSessionHasNoErrors()
            ->assertRedirect();
        $this->assertDatabaseHas('orders', $this->order);
    }
}
