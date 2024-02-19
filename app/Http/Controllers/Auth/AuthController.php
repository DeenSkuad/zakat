<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordResetToken;
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

            return redirect('/home');
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

    public function logout()
    {
        auth()->logout();

        return redirect()->route('auth.login');
    }

    public function newPassword($token)
    {
        $passwordResetToken = PasswordResetToken::where('token', $token)->first();

        $user = $passwordResetToken->user;

        return view('auth.new-password')->with([
            'user' => $user,
            'token' => $token
        ]);
    }

    public function changePassword(Request $request, $token)
    {
        $passwordResetToken = PasswordResetToken::where('token', $token)->first();

        $user = $passwordResetToken->user;

        $user->update([
            'password' => bcrypt($request->password)
        ]);

        PasswordResetToken::where('token', $token)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Kata Laluan berjaya dikemaskini!'
        ]);
    }
}
