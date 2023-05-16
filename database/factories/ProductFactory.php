<?php

namespace Database\Factories;

use App\Models\Category;
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
            'name'=>$this->faker->word(),
            'description'=>$this->faker->sentence(),
            'stock'=>$this->faker->numberBetween(10,50),
            'price'=>$this->faker->randomFloat(2,25,500),
            'state'=>$this->faker->randomElement(['enable','disable']),
            'category_id'=>Category::all()->random()->id,
            //
        ];
    }
}
