<?php

namespace App\Http\Controllers;

use App\Models\Post;

class Posts extends Controller
{
    public function index(){
        return response()->json(Post::orderBy('id','desc')->get());
    }

    public function show($id){
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update($id){
        return view('livewire.update-post')->livewire('update-post',['id'=>$id]);
    }
}
