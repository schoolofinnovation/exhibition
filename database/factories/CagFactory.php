<?php

namespace Database\Factories;

use App\Models\Cag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = $this->faker->unique()->words($nb=1,$asText=true);
        $slug = Str::slug($category);
        return [
            'category' => $category,
            'slug' => $slug,
            'c_desc' => $this->faker->text(200),
            'tag' => $category,
            'status' => '1',
            'image' => 'digital_'. $this->faker->numberBetween(01,10).'.jpg',  
                   ];
    }
}
