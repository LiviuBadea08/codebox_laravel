<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $capacity = $this->faker->numberBetween($min = 1, $max = 10);
        
        return [
            "name" => $this->faker->company(),
            "description" => $this->faker->realText(),
            "price" => $this->faker->numberBetween($min = 5, $max = 100),
            "image" => $this->faker->imageUrl(),
            "date" => $this->faker->date(),
            "time" => $this->faker->time(),
            "capacity" => $capacity,
            "stock" => $capacity,
            "featured" => $this->faker->boolean(),
        ];
    }
}
