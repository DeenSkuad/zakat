<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $input = $request->all();

        if (Auth::attempt(['ic_no' => $request->ic_no, 'password' => $request->password])) {
            $user = User::where('ic_no', $request->ic_no)->first();
            Auth::loginUsingId($user->id);

            return redirect('/');
        } else {
            return redirect()->back()->withErrors(['password' => 'Invalid login credentials']);
        }

        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        return view('auth.login');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }
}
