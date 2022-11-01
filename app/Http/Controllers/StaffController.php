<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\vaccine;
use App\Models\Vhistory;

class StaffController extends Controller
{
    function personHistory(Request $req)
    {
        $history = new Vhistory();
            $history->date = $req->date;
            $history->nic = $req->nic;
            $history->vp = $req->vp;
            $history->bnum = $req->bnum;
            $history->vstatus = $req->vstatus;
            $res = $history->save();

            if($res)
            {
                return back()->with('success','Registration Successfully');
            }
            else
            {
                return back()->with('fail','Submission Failed');
            }
    }

    function smartVaccination()
    {
        $users = User::all();
        return view('staff.smartv',compact('users'));
    }

    function historyDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
