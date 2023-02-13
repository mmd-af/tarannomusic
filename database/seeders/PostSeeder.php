<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\Post\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

class PostSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $faker->addProvider(new FakerPicsumImagesProvider($faker));
        $posts = Post::factory()->count(50)->create();
        foreach ($posts as $post) {
            $image = new Image();
            $image->url =  $faker->imageUrl(rand(400, 600), rand(500, 800));
            $post->images()->save($image);
        }
    }
}
