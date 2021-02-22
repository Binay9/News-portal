<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'image' => '',
            'category_id' => Category::factory(),
            'admin_id' => Admin::factory(),
            'status' => 'published',
            'published_at' => $this->faker->date
        ];
    }
}
