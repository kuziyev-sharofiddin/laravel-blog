<?php

namespace App\Repository;

use App\Models\Category;
use App\Repository\BaseRepository;

class CategoryRepository extends BaseRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}
