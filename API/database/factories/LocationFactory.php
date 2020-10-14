<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'latitude' => round($this->faker->latitude, 3),
            'longitude' => round($this->faker->longitude, 3),
            'opening_times' => $this->faker->time('H:i:s', 'now'),
            'closing_times' => $this->faker->time('H:i:s', 'now')
        ];
    }
}
