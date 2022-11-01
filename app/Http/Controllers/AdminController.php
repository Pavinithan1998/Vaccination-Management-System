<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class AdminController extends Controller
{
    function StaffRegistration(Request $req)
    {
        $staff = new User();
        $staff->fname = $req->fname;
        $staff->lname = $req->lname;
        $staff->address = $req->address;
        $staff->mobile = $req->mobile;
        $staff->moh = $req->moh;
        $staff->password = Hash::make($req->password);
        $staff->username = $req->username;
        $staff->role = 'staff';

        $res = $staff->save();
        if($res)
        {
            return back()->with('success','Registration Successfully');
        }
        else
        {
            return back()->with('fail','Registration Failed');
        }
    }
}
