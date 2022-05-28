<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $state = $this->faker->unique()->words($nb=1,$asText=true);
        $slug = Str::slug($state);
        return [
            'slug' => $slug,
            'desc'=> $this->faker->text(50),
            'parent_id'=> $this->faker->numberBetween(1,3),
            'image' => 'state_'. $this->faker->numberBetween(1,10).'.jpeg',
            'zone' => $this->faker->numberBetween(1,4),
            'status' => '1',
            'city' =>$this->faker->unique()->words($nb=1,$asText=true),
            'state' =>$this->faker->unique()->words($nb=1,$asText=true),
            'tier' => $this->faker->numberBetween(1,3),
        ];
    }
}
