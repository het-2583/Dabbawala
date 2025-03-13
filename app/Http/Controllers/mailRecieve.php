<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class mailRecieve extends Controller
{
    public function index()
    {
        // echo "hello";
        $data=['name'=>"You are signed up in for TIFFIN SERVICE",'data'=>"Hello"];
        $user['to']='hetthakkar544@gmail.com';
        Mail::send('mail',$data,function($messages) use($user){;
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect('login');
    }
}