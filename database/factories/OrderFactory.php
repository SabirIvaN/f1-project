<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_id' => $this->faker->randomElement(\App\Models\Service::all())['id'],
            'name' => $this->faker->name(),
            'address'  => $this->faker->sentence(),
            'comment' => $this->faker->text(),
        ];
    }
}
