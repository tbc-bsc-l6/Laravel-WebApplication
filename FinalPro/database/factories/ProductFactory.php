<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
// use Illuminate\Database\Eloquent\Factories\CategoryFactory;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Title' => fake()->words(3, true),
            'Creator' => fake()->Name(),
            'PagesorLength' => fake()->randomNumber(3, true),
            'category_id' => 1,
            'Price' => fake()->randomNumber(3, true),
        ];
    }
}
