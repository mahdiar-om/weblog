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

        return view('category.create' ,[
            'categories' => Category::all()->sortByDesc('parent_id'), 
        ]);
    }

    public function store(Request $request){
        Category::query()->create([
            'category_parent' => $request->get('category_id'),
            'category' => $request->get('category'),
        ]);
        return redirect(route("Home"));
    }
    public function show($id) {
        //return Post::all()->where('category_id' , $id);
        return view('category.show' , [
            'posts' => Post::all()->where('category_id' , $id),
            'category' => category::findorfail($id)->category
        ]);
    }
    
}
