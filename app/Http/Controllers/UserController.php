<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginPage() {
        $state = 'login';
        return view('login.login')->with($state);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route("posts.index"))->with('message' , 'welcome to your account');
        }
        return 'account not found';
    }

    public function signupPage() {
        return view('login.sign_up');
    }

    public function signup(Request $request) {
        $data = $request->all();
        User::query()->create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => bcrypt($data['password'])
        ]);
        return redirect(route("login-page"))->with("message" , "sing up sucssecfully");
    }
}

