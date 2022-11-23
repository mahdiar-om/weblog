<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Weblog;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class WeblogController extends Controller
{
    public function index(){
        return view('weblog.index' , [
            'weblogs' => Weblog::all(),
            'comments' => Comment::all()
        ]);
    }

    public function create () {
        return view('weblog.create');
    }

    public function store(Request $request){
        Weblog::query()->create([
            'user_id' => auth::id(),
            'text' => $request->get('text'),
            'title' => $request->get('title') 
        ]);
        return redirect(route("post_create"))->with('message' , 'new task add');
    }

    public function leave_comment(Request $request) {
        Comment::query()->create([
            'user_id' => auth::id(),
            'post_id' => $request->get('id'),
            'comment' => $request->get('comment')
        ]);
        return redirect(route("weblog_main_page"))->with('message' , 'comment post');
    }

    public function view_comments(Request $request) {
        $input = $request->all();
        $datas = Comment::all()
        ->where('post_id' , $input['id'])
        ->where('verification' , true);
        return 'hi';
    }
    
    
}    

