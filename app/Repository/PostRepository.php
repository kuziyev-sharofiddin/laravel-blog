<?php

namespace App\Repository;

use App\Models\Category;
use App\Models\Post;
use App\Repository\BaseRepository;

class PostRepository extends BaseRepository
{
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }
}
