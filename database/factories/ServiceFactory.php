<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $business = $this->faker->unique()->words($nb=1,$asText=true);
        $slug = Str::slug($business);
        return [
            'image' => 'digital_'. $this->faker->numberBetween(1,16).'.png',
            'desc'=> $this->faker->unique()->words($nb=15,$asText=true),
            'slug' => $slug,
            'category_id' => $this->faker->numberBetween(1,12),
            'sector_id' => $this->faker->numberBetween(35,45),
            'business' => $business,
            'status' => '1',
        ];
    }
}
