<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\Post\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $posts = Post::factory()->count(50)->create();
        foreach ($posts as $post) {
            $image = new Image();
            $image->url = $faker->imageUrl(rand(400, 600), rand(500, 800), 'nature');
            $post->images()->save($image);
        }
    }
}
