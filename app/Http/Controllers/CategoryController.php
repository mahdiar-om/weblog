<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CategoryController extends Controller
{
    public function create () {
        return view('category.create');
    }

    public function store(Request $request){
        comment::query()->create([
            'user_id' => auth::id(),
            'post_id' => $request->get('id'),
            'comment' => $request->get('comment'),
        ]);
        return redirect(route("Home"));
    }

    
}
