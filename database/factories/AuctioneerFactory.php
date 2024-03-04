<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Auctioneer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auctioneer>
 */
class AuctioneerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
            [
                'fname' => $this->faker->firstName,
                'mname' => $this->faker->optional()->lastName,
                'lname' => $this->faker->lastName,
                'email' => $this->faker->unique()->safeEmail,
                'pnumber' => $this->faker->phoneNumber,
                'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            ];
    }
}
