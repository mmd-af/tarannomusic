<?php

namespace Database\Seeders;

use App\Models\Image\Image;
use App\Models\Instrument\Instrument;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Smknstd\FakerPicsumImages\FakerPicsumImagesProvider;

class InstrumentSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $faker->addProvider(new FakerPicsumImagesProvider($faker));
        $instruments = Instrument::factory()->count(10)->create();
        foreach ($instruments as $instrument) {
            $image = new Image();
            $image->url = $faker->imageUrl(300, rand(350, 600));
            $instrument->images()->save($image);
        }
    }
}
