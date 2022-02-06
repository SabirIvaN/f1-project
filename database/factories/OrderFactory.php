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
            'name'      => $this->faker->name(),
            'phone'     => $this->faker->phoneNumber(),
            'email'     => $this->faker->email(),
            'address'   => $this->faker->sentence(),
            'comment'   => $this->faker->text(),
            'completed' => $this->faker->boolean(),
        ];
    }
}
