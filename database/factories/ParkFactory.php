<?php

namespace Database\Factories;

use App\Models\Park;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

class ParkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Park::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'park_uuid' => Uuid::uuid4(),
            'name' => $this->faker->name,
            'year_established' => $this->faker->year,
            'state' => $this->faker->state,
        ];
    }
}
