<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Type $var = null)
    {
        return view('user_management.change_password');
    }
    public function changepassword(Request $request)
    {
        $oldpass = $request->oldpassword;
        $newpass = $request->newpassword;
        $confirmnewpass = $request->confirmnewpassword;
        
        if($oldpass == $newpass){
            return redirect('/admin/login')->with('error', 'Password lama sama dengan password baru');
        }
        if($newpass != $confirmnewpass){
            return redirect('/admin/login')->with('error', 'Password Tidak sama');
        }

        $user = User::where('email', 'user@example.com')->first();
        if(!$user){
            return redirect('/admin/login')->with('error', 'User Email Tidak Ada');
        }
        if(Hash::check($oldpass, $user->password)){
            $user = User::where('email', 'user@example.com')->update([
                'email' => 'user@example.com',
                'password' => $newpass
            ]);
            return redirect('home');
        }
        return view('user_management.change_password');
    }
}
