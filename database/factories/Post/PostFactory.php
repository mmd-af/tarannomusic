<?php

namespace Database\Factories\Post;

use App\Models\Post\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{

    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title);

        return [
            'user_id' => 1,
            'title' => $title,
            'slug' => $slug,
            'description' => $this->faker->paragraph(10),
            'is_active' => 1,
        ];
    }

}
