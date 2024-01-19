<?php

namespace App\Service;

use App\Repository\CategoryRepository;
class CategoryService
{
        public function __construct(protected CategoryRepository $repository)
    {
        $this->repository = $repository;
    }
    public function getByPaginate($limit)
    {
        return $this->repository->paginate($limit);
    }
    public function getById($id)
    {
       return $this->repository->getById($id);
    }
}
