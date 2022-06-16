<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function view_login(){
        if (session()->get('user')){
            return redirect('dashboard');
        }

        return view('login');
    }

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

    public function profile(){
        $id = request()->session()->get('user')->id;

        $user = User::findOrFail($id);
        $title = 'Profile User';

        return view('user.detail', compact('title', 'user'));
    }

    public function logout(){
        request()->session()->forget('user');
        Auth::logout();

        return redirect('/')->with('success', 'Sukses Melakukan Logout');
    }
    
    public function update_role($id, $role){
        User::where('id', $id)->update(['role' => $role]);
        
        return redirect()->back()->with('success', 'Sukses update role pengguna');
    }
}