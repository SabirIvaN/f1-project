<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    private City $city;
    private Service $service;
    private array $order;

    protected function setUp(): void
    {
        parent::setUp();

        $this->city = City::factory()->create();
        $this->service = Service::factory()->create();
        $this->order = Order::factory()
            ->for($this->city)
            ->for($this->service)
            ->make()
            ->toArray();
    }

    /**
     * Testing the create function.
     *
     * @return void
     */
    public function testCreate()
    {
        $this->get(route('order.create', $this->service))
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
        $this->post(route('order.store'), $this->order)
            ->assertSessionHasNoErrors()
            ->assertRedirect();
        $this->assertDatabaseHas('orders', $this->order);
    }
}
