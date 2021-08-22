<?php

namespace Database\Factories;

use App\Models\Maftir;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaftirFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Maftir::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'updated_at' => Carbon::now()->subMinutes(rand(1, 55)),
            'name' => $this->faker->name(),
            'designation' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'comment' => $this->faker->sentence(),
            'amount' => $this->faker->randomDigitNotZero(),
        ];
    }
}
