<?php

namespace Database\Factories\Teacher;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeacherFactory extends Factory
{

    public function definition()
    {

        $title = $this->faker->name();
        $slug = Str::slug($title);

        return [
            'name' => $title,
            'slug' =>  $slug,
            'bio' => $this->faker->text(),
            'teach' => $this->faker->word(),
            'is_active' => 1,
        ];
    }

}
