<?php

namespace App\Service;

use App\Repository\CommentRepository;

class CommentService
{
        public function __construct(protected CommentRepository $repository)
    {
        $this->repository = $repository;
    }
    public function getByPaginate($limit)
    {
        return $this->repository->paginate($limit);
    }
    public function create(array $data){
        $result = [
            'body' => $data['body'],
            'post_id' => $data['post_id'],
            "user_id" => auth()->id(),
        ];
        $this->repository->create($result);
    }
    public function getById($id)
    {
       return $this->repository->getById($id);
    }
}
