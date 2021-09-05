<?php

namespace Tests\Feature;

use App\Helpers\Console;

use App\Models\User;
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

    private User $user;
    private City $city;
    private Service $service;
    private array $order;

    protected function setUp(): void
    {
        parent::setUp();

        $faker = Factory::create();

        $this->user = User::factory()->create();
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
        Console::output($this->user);

        $this->post(route('order.store'), $this->order)
            ->assertSessionHasNoErrors()
            ->assertRedirect();
    }
}
