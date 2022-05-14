<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            $user = Auth::user();

            request()->session()->put('user', Auth::user());
        } else {
            return redirect()->back()->with('error', 'Username Atau Password Anda Salah');
        }

        return redirect('dashboard');
    }
}