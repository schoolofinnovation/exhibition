<?php

namespace Database\Factories;

use App\Models\Franchise;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FranchiseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Franchise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $franchise_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($franchise_name);
        return [
            'brand_name' => $franchise_name,
            'slug' => $slug,
            'Co_name' => $this->faker->unique()->words($nb=4,$asText=true),
            'min_investment' => $this->faker->numberBetween(10,20),
            'max_investment' => $this->faker->numberBetween(30,90),
            'min_area' => $this->faker->numberBetween(90,110),
            'max_area' => $this->faker->numberBetween(110,500),
            'year' => $this->faker->numberBetween(1991,2021),
            'max_outlet' => $this->faker->numberBetween(30,90),
            'min_outlet' => $this->faker->numberBetween(10,20),
            'total_no_outlet' => $this->faker->numberBetween(10,500),
            'location' => 'east',
            'state' => 'delhi',
            //'email ' => $this->faker->unique()->safeEmail(),
            'contact' => '989171'. $this->faker->unique()->numberBetween(1000,3607),
            'property_type' => 'commercial',
            'featured' => 'high',
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'image' => 'digital_'. $this->faker->numberBetween(1,10).'.png',
            'brand_image' => 'digital_'. $this->faker->numberBetween(1,10).'.png',
            'status' => 'active',
            //'brand_id' => $this->faker->numberBetween(2,10),
            'category_id' => $this->faker->numberBetween(1,12),
            'user_id' => $this->faker->numberBetween(1,4),
            
        ];
    }
}
