<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->realTextBetween(10, 20),
            'author' => $this->faker->name(),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'description' => $this->faker->realText(200),
            'link' => $this->faker->url(),
            'featured' => $this->faker->boolean(),
            'category_id' => $this->faker->randomElement(Category::pluck('id')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
