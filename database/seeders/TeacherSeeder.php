<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\Teacher\Teacher;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $teachers = Teacher::factory()->count(10)->create();
        foreach ($teachers as $teacher) {
            $image = new Image();
            $image->url = $faker->imageUrl(rand(150, 220), rand(200, 260), 'people');
            $teacher->images()->save($image);
        }
    }
}
