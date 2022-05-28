<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($city);
        return [
            'slug' => $slug,
            'desc'=> $this->faker->text(50),
            'image' => 'city_'. $this->faker->numberBetween(1,10).'.jpeg',
            'zone' => $this->faker->numberBetween(1,5),
            'status' => '1',
            //'city' => $this->faker->unique()->words($nb=2,$asText=true),
            'location_id' =>$this->faker->numberBetween(1,30),
            'tier' => $this->faker->numberBetween(1,3),
        ];
    }
}
