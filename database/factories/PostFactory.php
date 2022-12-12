<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(1920,720, 'cats', true),
            'status' => $this->faker->randomElement([
                'Draft', 'Publish', 'Unlisted',
            ]),
        ];
    }
}
