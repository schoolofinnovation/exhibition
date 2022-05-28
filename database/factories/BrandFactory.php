<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
            $brand_name = $this->faker->unique()->words($nb=2,$asText=true);
            $slug = Str::slug($brand_name);
            return [
                'brand_name' => $brand_name,
                'slug' => $slug,
                'brand_logo' => 'digital_'. $this->faker->numberBetween(1,10).'.png',
                'tag_line' =>$this->faker->unique()->words($nb=5,$asText=true),
                'industry' => 'food',
                'sector' => 'Food & Beverages',
                'tittle_line' => $this->faker->text(50),
                'short_desc' => $this->faker->text(200),
                'long_desc' => $this->faker->text(200),
                'brand_est_year' => $this->faker->numberBetween(1991,2021),
                'about' => $this->faker->text(250),
                'official_website' => 'www'. $this->faker->unique()->text(7).'com',
                'business_model' => 'FOFO',
                'type_business_model' => 'FOFO',
                'no_of_store' => $this->faker->numberBetween(10,500),
                'document' => 'doc_'. $this->faker->numberBetween(01,10).'.png',
                'brochure' => 'bro_'. $this->faker->numberBetween(01,10).'.png',
                'banner' => 'ban_'. $this->faker->numberBetween(01,10).'.png',
                'twitter' => 'www.twitter.com',
                'facebook' => 'www.facebook.com',
                'instagram' => 'www.instagram.com',
                'linkedin' => 'www.linkedin.com',
                'youtube' => 'www.youtube.com',
                'brand_identity_video' => 'brv_'. $this->faker->numberBetween(01,10).'.png',
                'product_video' => 'prv_'. $this->faker->numberBetween(01,10).'.png',
                'user_email' => $this->faker->unique()->safeEmail(),
                'user_contact' => '989000'. $this->faker->unique()->numberBetween(1000,3607),
                'brand_head_name' => $this->faker->unique()->words($nb=2,$asText=true),
                'bh_email' => $this->faker->unique()->safeEmail(),
                'bh_contact' => '808271'. $this->faker->unique()->numberBetween(1000,3607),
                'user_id' => $this->faker->numberBetween(1,4),
                'sprofile_id' => 1,
                //'sprofile' => $sprofile,
                'category_id' => $this->faker->numberBetween(1,12),
                'status' => 'active',
               
        ];
    }
}
