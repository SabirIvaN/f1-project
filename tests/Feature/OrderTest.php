<?php

namespace Tests\Feature;

use App\Helpers\Console;
use App\Models\City;
use App\Models\Order;
use App\Models\Service;
use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    private City $city;
    private Service $service;
    private Order $orders;

    protected function setUp(): void
    {
        parent::setUp();

        Artisan::call('db:seed');

        $faker = Factory::create();

        $this->city = City::factory()->create();
        $this->service = Service::factory()->create();
        $this->order = Order::factory()
            ->state([
                'name' => Factory::create()->name(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'address' => $faker->address(),
                'comment' => $faker->text(),
            ])
            ->for($this->city)
            ->for($this->service)
            ->make();
        Console::output($this->city);
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

        $this->assertDatabaseHas('orders', ['id' => 1]);
    }

    /**
     * Testing the store function.
     *
     * @return void
     */
    public function testStore()
    {
        // $this->post(route('order.store'), $orderArray)->assertStatus(403);

        // $this->assertDatabaseHas('orders', $orderArray);
    }
}
