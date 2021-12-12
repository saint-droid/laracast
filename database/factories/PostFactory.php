<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'category_id'=>Category::all()->random()->id,
            'user_id'=>User::all()->random()->id,
            'title'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'excerpt'=> '<p>' . implode('</p><p>', $this->faker->paragraphs(2)) .'</p>',
            'body'=> '<p>' . implode('</p><p>', $this->faker->paragraphs(6)) .'</p>',
        ];
    }
}
