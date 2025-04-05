<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
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
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2,10000,3000000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'url_image' => 'https://apexapr.mu/sites/default/files/product-images-2022-11/10th%20gen-01.png'
        ];
    }
}
