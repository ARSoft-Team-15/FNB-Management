<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Type $var = null){
        return view('user_management.index');
    }

    public function getChangePassword()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        // return $user;
        return view('user_management.change_password', $user);
    }

    public function postChangePassword(Request $request)
    {
        $id = Auth::id();
        $oldpass = $request->oldpassword;
        $newpass = $request->newpassword;
        $confirmnewpass = $request->confirmnewpassword;

        if($oldpass == $newpass){
            return redirect('/admin/login')->with('error', 'Password lama sama dengan password baru');
        }
        if($newpass != $confirmnewpass){
            return redirect('/admin/login')->with('error', 'Password Tidak sama');
        }

        $user = User::where('id', $id)->first();
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

    public function getAllUser()
    {
        $user = User::all();
        $data['user'] = $user;

        return view('user_management.manage_data_personel', $data);
    }

    public function getAllUserLog()
    {
        $userlog = UserLog::all();
        return $userlog;
    }
}
