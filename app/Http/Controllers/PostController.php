<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StorePostRequest;
use App\Service\CategoryService;
use App\Service\PostService;
use App\Service\TagService;

class PostController extends Controller
{
    public function __construct(
        protected PostService $service,
        protected CategoryService $categoryService,
        protected TagService $tagService
        ){

        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        $posts = $this->service->getByPaginate(10);
        return view("posts.index")->with(['posts' => $posts]);
    }
    public function create()
    {
        $categories = $this->categoryService->getByPaginate(10);
        $tags = $this->tagService->getByPaginate(10);
        return view("posts.create")->with([
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }
    public function store(StorePostRequest $request)
    {
        $this->service->create($request->all());
        return redirect()->route('posts.index');

    }

    public function show($post)
    {
        $post = $this->service->getById($post);
        $recent_posts = $this->service->getLatestById($post);
        $categories = $this->categoryService->getByPaginate(10);
        $tags = $this->tagService->getByPaginate(10);
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => $recent_posts,
            'categories' => $categories,
            'tags' => $tags,
        ]);

        }


    public function edit($post)
    {
        $post = $this->service->getById($post);
        if (! Gate::allows('update-post', $post)){
            abort(403);
        }
        return view('posts.edit')->with(['post'=>$post]);
    }


    public function update($post,StorePostRequest $request)
    {
        Gate::authorize('update-post', $post);
        $post = $this->service->update($post,$request->validated());
        return redirect()->route('posts.show', ['post' => $post]);
    }
    public function destroy($post)
    {
        $this->service->destroy($post);
        return redirect()->route('posts.index');
    }
}
