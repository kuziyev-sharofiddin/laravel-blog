<?php

namespace App\Repository;

use App\Models\Tag;
use App\Repository\BaseRepository;

class TagRepository extends BaseRepository
{
    public function __construct(Tag $model)
    {
        parent::__construct($model);
    }
}
