<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company'=>fake() -> company(),
            'departure_station'=>fake() -> city(1),
            'arrival_station'=>fake() -> city(1),
            'departure_time'=>fake() -> dateTimeBetween('now', '+2 days'),
            'arrival_time'=>fake() -> dateTimeBetween('+2 days', '+1 week'),
            'train_code'=>fake() -> regexify('[A-Z]{5}[0-4]{3}'),
            'carriages'=>fake() ->numberBetween(1, 20),
            'in-time'=>fake() -> boolean(),
            'cancelled'=>fake() -> boolean(),
        ];
    }
}
