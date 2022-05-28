<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rating' => $this->faker->numberBetween(1,5),
            'comment'=> $this->faker->text(200),
            'franchise_id' => $this->faker->numberBetween(138,197),
            'user_id' => $this->faker->numberBetween(1,4),
            'mag_id' => $this->faker->numberBetween(1,30),
            'status' => 'active',
            'pros' => $this->faker->unique()->words($nb=3,$asText=true),
            'cons' => $this->faker->unique()->words($nb=5,$asText=true),
        ];
    }
}
