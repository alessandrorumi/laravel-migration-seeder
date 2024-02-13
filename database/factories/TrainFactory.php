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
            'company'=>fake() -> word(),
            'departure_station'=>fake() -> words(2, true),
            'arrival_station'=>fake() -> words(2, true),
            'departure_time'=>fake() -> dateTimeBetween('-1 week', '+1 week'),
            'arrival_time'=>fake() -> dateTimeBetween('-1 week', '+1 week'),
            'train_code'=>fake() -> regexify('[A-Z]{5}[0-4]{3}'),
            'carriages'=>fake() ->numberBetween(0, 20),
            'in-time'=>fake() -> boolean(),
            'cancelled'=>fake() -> boolean(),
        ];
    }
}
