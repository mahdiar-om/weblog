<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CommentController extends Controller
{
    public function create ($id) {
        return view('comment.create')->with('id' , $id);
    }

    public function store(Request $request){
        comment::query()->create([
            'user_id' => auth::id(),
            'post_id' => $request->get('id'),
            'comment' => $request->get('comment'),
        ]);
        return redirect(route("posts.index"))->with('message' , 'new post added');
    }

    /*public function show($id){
        return view('posts.single' , [
            'post' => Post::findOrFail($id)
        ]);
    }*/
}
