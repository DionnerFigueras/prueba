<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveFormRequest;
use App\Models\Post;

class PostController {
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts'=>$posts]);
    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    public function create(Post $post){
        return view('posts.create', ['post'=> new Post]);
    }

    public function store(SaveFormRequest $request) {

        Post::create($request->validated());

        return to_route('posts.index')->with('status', 'Post created');
    }

    public function edit (Post $post){
        return view('posts.edit',['post' => $post]);
    }

    public function update(SaveFormRequest $request, Post $post){
 
        $post->update($request->validated());

        return to_route('posts.index')->with('status', 'Post edited');
    }

    public function destroy (Post $post){
        $post->delete();

        return to_route('posts.index')->with('status', 'Post deleted');
    }
}

/* Antigua Forma
$posts = [
    ['title' => 'First Post'],
    ['title' => 'Second Post'],
    ['title' => 'Third Post'],
    ['title' => 'Fourth Post'],
];

return view('blog', ['posts'=> $posts]); */