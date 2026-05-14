<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('Auth.login');
    }


   public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role == 1) {
                return redirect('/admin/dashboard');
            }

            elseif ($user->role == 2) {
                return redirect('/employee/dashboard');
            }

            elseif ($user->role == 3) {
                return redirect('/hr/dashboard');
            }
        }

        return back()->with('error', 'Invalid Email or Password');
    }
}
