<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'quantity' =>rand(1,1000),
            'price' =>rand(1,1000),
            'image' =>null,
            'description' =>fake()->paragraph(3),
            'category_id' => rand(2,6),
        ];
    }
}
