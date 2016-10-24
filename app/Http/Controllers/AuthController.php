<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('auth/login');
        }
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                if ($request->remember) {
                    Auth::login($user, true);
                } else {
                    Auth::login($user, false);
                }

                return redirect('/home');
            } else {
                return redirect('/login')->with('gagal', 'Alamat E-Mail dengan kata sandi tidak cocok.');
            }
        } else {
            return redirect('/login')->with('gagal', 'Alamat E-Mail tidak ditemukan.');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/home');
    }

    public function postLogout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
