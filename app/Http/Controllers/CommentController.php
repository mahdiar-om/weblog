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
        return view('comment.create' , [
            'id' => $id,
            'post' => post::findOrFail($id)
        ]);
    }

    public function store(Request $request){
        comment::query()->create([
            'user_id' => auth::id(),
            'post_id' => $request->get('id'),
            'comment' => $request->get('comment'),
        ]);
        return redirect(route("Home"));
    }

    public function verificationPage($id) {
    
        return view('comment.verification' ,[
            'comments' => comment::all()->where('post_id' , $id)->sortByDesc('created-at'),
            'id' => $id,
        ]);
    }
    
    public function verification($id , Request $request) {
        $input = $request->all();
        Comment::where('id', $input['id'])
        ->update(['verification' => !$input['verification']]);
        return redirect()->route('comment.verification', ['id' => $id]);
    }
}
