<?php

namespace App\Models\Post;

use App\Models\Image\Image;
use App\Models\User\User;

trait PostRelationships
{
    protected $cascadeDeletes = ['images'];

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
