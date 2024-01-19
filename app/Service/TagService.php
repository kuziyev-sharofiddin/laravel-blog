<?php

namespace App\Service;

use App\Repository\TagRepository;

class TagService
{
        public function __construct(protected TagRepository $repository)
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
