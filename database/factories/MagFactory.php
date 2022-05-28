<?php

namespace Database\Factories;

use App\Models\Mag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tittle = $this->faker->unique()->words($nb=15,$asText=true);
        $slug = Str::slug($tittle);
        return [
            'tittle' => $tittle,
            'slug' => $slug,
            'desc'=> $this->faker->text(200),
            's_desc'=> $this->faker->text(50),
            'image' => 'digital_'. $this->faker->numberBetween(1,10).'.png',
            'user_id' => $this->faker->numberBetween(1,4),
            'status' => '1',
            'type' => 'a',
            'tag' => $this->faker->unique()->words($nb=1,$asText=true),
           
        ];
    }
}
