<?php

namespace Database\Factories\Instrument;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InstrumentFactory extends Factory
{

    public function definition()
    {

        $title = $this->faker->word();
        $slug = Str::slug($title);

        return [
            'name' => $title,
            'slug' =>  $slug,
            'description' => $this->faker->text(),
            'is_active' => 1,
        ];
    }

}
