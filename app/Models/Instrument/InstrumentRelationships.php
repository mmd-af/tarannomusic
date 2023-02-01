<?php

namespace App\Models\Instrument;

use App\Models\Image\Image;

trait InstrumentRelationships
{
    protected $cascadeDeletes = ['images'];

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
