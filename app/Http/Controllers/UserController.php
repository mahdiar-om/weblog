<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function authenticate(Request $request)
    {   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route("weblog_main_page"))->with('message' , 'welcome to your account');
        }
        return 'account not found';
    }
    
    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function index() {
        return view('login.login');
    }

    public function create_account() {
        return view('login.sign_up');
    }

    public function store_account(Request $request) {
        $data = $request->all();
        User::query()->create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => bcrypt($data['password'])
        ]);
        return redirect(route("login_page"))->with("message" , "sing up sucssecfully");
    }
}    

