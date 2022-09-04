<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition()
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->text(),
            'price' => fake()->randomFloat(2, 1, 100),
            'stock' => fake()->numberBetween(1, 100),
            'category_id' => Category::factory(),
        ];
    }
}
