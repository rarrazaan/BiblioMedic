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

    public function index()
    {
        $title = 'Data User';
        $users = User::paginate();

        return view('user.index', compact('title', 'users'));
    }
    public function detail($id){
        $user = User::find($id);
        $title = 'User Detail';

        return view('user.detail', compact('title', 'user'));
    }
}