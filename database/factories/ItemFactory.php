<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Maker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique->userName,
            'price' => $this->faker->unique->biasedNumberBetween(300, 999),
            'category_id' => rand(1, Category::count()),
            'maker_id' => rand(1, Maker::count()),
            'created_at' => $this->faker->date('Y-m-d', 'now')
        ];
    }
}
