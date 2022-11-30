<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        return view('posts.index' , [
            'posts' => Post::all()
        ]);
    }

    public function create () {
        return view('posts.create');
    }

    public function show($id){
        return view('posts.single' , [
            'post' => Post::findOrFail($id)
        ]);
    }

    public function store(Request $request){
        Post::query()->create([
            'user_id' => auth::id(),
            'category_id' => 1,
            'text' => $request->get('text'),
            'title' => $request->get('title')
        ]);
        return redirect(route("posts.index"));
    }

    public function userPost() {
        return view('posts.user_post' , [
            'posts' => Post::all()->where('user_id' , auth::id())
        ]);
    }
    public function update()
    {
        //TODO
    }

    public function delete()
    {
        //TODO
    }
}

