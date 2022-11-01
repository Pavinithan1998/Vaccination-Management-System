<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\vaccine;
use App\Models\User;

class PublicController extends Controller
{
    function PublicRegistration(Request $req)
    {

        if($req->password == $req->repassword)
        {
            $unique = User::where('username','=',$req->username)->first();

            if(!$unique)
            {
                $public = new User();
                $public->fname = $req->fname;
                $public->lname = $req->lname;
                $public->address = $req->address;
                $public->mobile = $req->mobile;
                $public->moh = $req->moh;
                $public->password = Hash::make($req->password);
                $public->username = $req->username;
                $public->role = 'public';
                $public->nic = $req->nic;
                $public->district = $req->district;
                $public->gender = $req->gender;
        
                $res = $public->save();
                if($res)
                {
                    return redirect('/')->with('success','Registration Successfully');
                }
                else
                {
                    return back()->with('fail','Registration Failed');
                }
            }
            else
            {
                return back()->with('fail','User Already exist');
            }

            
        }
        else
        {
            return back()->with('fail','Password Not Matched');
        }

       
    }

    function SmartVaccination(Request $req)
    {
        $unique_pass = vaccine::where('pass','=',$req->pass)->first();
        $unique_email = vaccine::where('email','=',$req->email)->first();

        if(!$unique_pass)
        {
            $report = new vaccine();
            $report->fullname = $req->fullname;
            $report->pass = $req->pass;
            $report->age = $req->age;
            $report->email = $req->email;
            $report->file = $req->file;

            $res = $report->save();
                if($res)
                {
                    return redirect('/public/dashboard')->with('success','Registration Successfully');
                }
                else
                {
                    return back()->with('fail','Submission Failed');
                }
        }
        else
        {
            return back()->with('fail','Already exists');
        }
    }

    function getPersonDetails()
    {
        $person = User::where('id','=',Session('loginId'))->get();
        // print($person->fname);
        // return view('public.dashboard',compact($person));
        
        
    }
}
