<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
class AdminController extends Controller
{
    public function login(Request $req)
   
    {
        $req->validate([
            'Email' => 'required|email',
            'Pass' => 'required',
        ]);
        $userFound=admin::where(['Email'=>$req->Email])->first();
        if($userFound)
        {
            //return $userFound;
             if (($req->Pass)==$userFound->Pass)
             {
                //dd('hii');
                //return $userFound;
                $req->session()->put('admin', $userFound->id);
                return view('home3');
            }
            else
              return "Wrong";
        }
    }
    public function index()
    {
        return view('AdminLogin');
    }


    public function logout()
    {
        if(Session()->has('sign'))
        {
            Session()->pull('sign');
            return redirect('AdminLogin');
        }
    }
}
