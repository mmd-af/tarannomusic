<?php

namespace App\Repositories\Site;

use App\Models\Post\Post;

class PostRepository extends BaseRepository
{
    public function __construct(Post $model)
    {
        $this->setModel($model);
    }

    public function getPosts()
    {
        return $this->query()
            ->select([
                'id',
                'slug',
                'user_id',
                'title',
                'description',
                'created_at'
            ])
            ->where('is_active', 1)
            ->with(['images', 'users'])
            ->latest()
            ->paginate(10);
    }
}
