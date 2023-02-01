<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\Instrument\Instrument;
use Faker\Factory;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $instruments = Instrument::factory()->count(10)->create();
        foreach ($instruments as $instrument) {
            $image = new Image();
            $image->url = $faker->imageUrl(300, rand(350, 600), 'fashion');
            $instrument->images()->save($image);
        }
    }
}
