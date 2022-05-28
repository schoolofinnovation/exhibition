<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $franchise_name = $this->faker->unique()->words($nb=1,$asText=true);
        $slug = Str::slug($franchise_name);
        return [
            'image' => 'digital_'. $this->faker->numberBetween(1,16).'.png',
            'desc'=> $this->faker->unique()->words($nb=15,$asText=true),
            'slug' => $slug,
            'category_id' => $this->faker->numberBetween(1,30),
            'parent_id' => $this->faker->numberBetween(1,30),
            'status' => '1',
            'sector' => $franchise_name,
            'count' => $this->faker->numberBetween(20,99),
        ];
    }
}
