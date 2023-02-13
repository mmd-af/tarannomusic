<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\Teacher\Teacher;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $faker->addProvider(new FakerPicsumImagesProvider($faker));
        $teachers = Teacher::factory()->count(10)->create();
        foreach ($teachers as $teacher) {
            $image = new Image();
            $image->url = $faker->imageUrl(rand(200, 260), rand(200, 260));
            $teacher->images()->save($image);
        }
    }
}
