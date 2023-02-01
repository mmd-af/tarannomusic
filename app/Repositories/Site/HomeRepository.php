<?php

namespace App\Repositories\Site;


use App\Enums\ECategoryType;
use App\Models\Instrument\Instrument;
use App\Models\Post\Post;
use App\Models\Teacher\Teacher;
use Illuminate\Database\Eloquent\Builder;

class HomeRepository extends BaseRepository
{
    public function getTeachers()
    {
        return Teacher::query()
            ->select([
                'id',
                'name',
                'slug',
                'bio',
                'teach'
            ])
            ->where('is_active', 1)
            ->with('images')
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }

    public function getInstruments()
    {
        return Instrument::query()
            ->select([
                'id',
                'name',
                'slug',
                'description'
            ])
            ->where('is_active', 1)
            ->with('images')
            ->inRandomOrder()
            ->get();

    }

    public function getPosts()
    {
        return Post::query()
            ->select([
                'id',
                'title',
                'slug',
                'description'
            ])
            ->where('is_active', 1)
            ->with('images')
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }
}
