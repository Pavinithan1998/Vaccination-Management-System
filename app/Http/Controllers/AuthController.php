<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    function loginFunction(Request $request)
    {
        $user = User::where('username','=',$request->username)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request->Session()->put('loginId',$user->id);
                if($user->role == 'admin')
                {
                    return redirect('/admin/dashboard');
                }
                else if($user->role == 'staff')
                {
                    return redirect('/staff/dashboard');
                }
                else if($user->role == 'public')
                {
                    return view('public.dashboard',compact($user));
                }
            }
            else
            {
                return back()->with('fail','Wrong Password');
            }
        }
        else
        {
            return back()->with('fail','User not exist');
        }
    }
}
