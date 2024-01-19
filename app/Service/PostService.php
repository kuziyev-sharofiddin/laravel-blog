<?php

namespace App\Service;
use App\Repository\PostRepository;
use Illuminate\Support\Facades\Storage;

class PostService
{
        public function __construct(protected PostRepository $repository)
    {
        $this->repository = $repository;
    }
    public function getByPaginate($limit)
    {
        return $this->repository->paginate($limit);
    }
    public function create(array $data){
        if (isset($data["photo"])) {
            $name = $data["photo"]->getClientOriginalName();
            $path = $data["photo"]->storeAs('post-photos', $name);
        }
        $result = [
            'user_id'=>auth()->user()->id,
            "category_id"=>$data["category_id"],
            'title' => $data["title"],
            'short_content' => $data["short_content"],
            'content' => $data["content"],
            'photo' => $path ?? null,
        ];
        $this->repository->create($result);
    }
    public function getById($id)
    {
       return $this->repository->getById($id);
    }
    public function update($id,array $data):bool
    {
        if (isset($data["photo"])){
            if (isset($id->photo)){
                Storage::delete($id->photo);
            }
            $name = $data["photo"]->getClientOriginalName();
            $path = $data["photo"]->storeAs('post-photos', $name);
        }
        $result = [
            'user_id'=>auth()->user()->id,
            "category_id"=>$data["category_id"],
            'title' => $data["title"],
            'short_content' => $data["short_content"],
            'content' => $data["content"],
            'photo' => $path ?? $data["photo"],
        ];
                if (isset($data["tags"])){
            foreach($data["tags"] as $tag){
                $data["id"]->tags()->attach($tag);
            }
        }
        return $this->repository->update($id,$result);
    }
    public function destroy($id){
        if (isset($id->photo)){
            Storage::delete($id->photo);
        }
        return $this->repository->delete($id);
    }
    public function getLatestById($id){
        return $this->repository->getLatestById($id);
    }
}
