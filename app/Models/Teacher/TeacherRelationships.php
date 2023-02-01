<?php

namespace App\Models\Teacher;

use App\Models\Image\Image;

trait TeacherRelationships
{
    protected $cascadeDeletes = ['images'];

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
