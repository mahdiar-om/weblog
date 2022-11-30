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
        return redirect(route("posts.index"));
    }

    // public function verificationPage() {
    //     $querys = Post::all()->where('user_id' , auth::id());
    //     foreach($querys as $query) {
    //         $data = Comment::all()->where('post_id' , $query['id']);
    //     }
    //     return $data;
    // }
    
    // public function verification(Request $request) {
    //     $input = $request->all();
    //     Comment::where('id', $input['id'])
    //     ->update(['verification' => !$input['']]);

    // }
}
