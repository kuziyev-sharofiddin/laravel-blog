<?php

namespace App\Repository;

use App\Models\Comment;
use App\Repository\BaseRepository;

class CommentRepository extends BaseRepository
{
    public function __construct(Comment $model)
    {
        parent::__construct($model);
    }
}
