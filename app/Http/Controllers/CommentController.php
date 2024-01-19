<?php

namespace App\Http\Controllers;
use App\Service\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct(protected CommentService $service){

    }
    public function store(Request  $request){
        $this->service->create($request->all());
         return redirect()->back();
    }
}
