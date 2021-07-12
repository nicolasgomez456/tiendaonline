<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPUnit\Framework\returnSelf;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'image' => 'products/'. $this->faker->image('public/storage/products', 640, 480, null, false) //imagen 1 jpg
        ];
    }
}
