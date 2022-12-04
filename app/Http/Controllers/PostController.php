<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function Home(){
        return view('welcome' , [
            'posts' => Post::all()
        ]);
    }

    public function comments($id){
        return view('posts.comments' , [
            'comments' => comment::all()->where('post_id' , $id)->sortByDesc('created_at'),   //->sortByDesc('create_at'),
            'post' => post::findOrFail($id)
        ]);
    }

    public function show($id){
        return view('posts.single' , [
            'post' => Post::findOrFail($id)
        ]);
    }

    public function create () {
        return view('posts.create' , [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request){
        Post::query()->create([
            'user_id' => auth::id(),
            'category_id' => $request->get('category_id'),
            'text' => $request->get('text'),
            'title' => $request->get('title')
        ]);
        return redirect(route("Home"));
    }

    public function userPost() {
        return view('posts.user_post' , [
            'posts' => Post::all()->where('user_id' , auth::id())->sortByDesc('created_at'),
        ]);
    }
    public function updatePage($id) {
      
    } 
    public function update(Request $request) {
        $input = $request->all();
        post::where('id', $input['id'])
        ->update(['text' => $input['text']])
        ->update(['title' => $input['title']])
        ->update(['category_id' => $input['category_id']]);
    }  
}



