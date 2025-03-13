<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function login(Request $req)
   
    {
        $req->validate([
            'Email' => 'required|email',
            'Pwd' => 'required',
        ]);
        $userFound= SignUp::where(['Email'=>$req->Email])->first();
        if($userFound)
        {
            //return $userFound;
             if (md5($req->Pwd)==$userFound->Pwd)
             {
                //dd('hii');
                //return $userFound;
                $req->session()->put('sign', $userFound->id);
                return redirect('dashboard');
            }
            else
              return "Wrong";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function home2()
    {
        return view ('home2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Phone' => 'required',
            'Email' => 'required|email',
            'Pwd' => 'required',
        ]);
        $signup = new SignUp;
        $signup->Name=$request['Name'];
        $signup->Phone=$request['Phone'];
        $signup->Email=$request['Email'];
        $signup->Pwd=md5($request['Pwd']);
        $signup->save();
        $data=['name'=>"You are signed up in for TIFFIN SERVICE",'data'=>"Hello {$request['Name']}"];
        $user['to']=$request['Email'];
        Mail::send('mail',$data,function($messages) use($user){;
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect('mail');
    }

        public function view()
        {
            $allRecords=signup::all();
            return view('view',compact('allRecords'));
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function show(SignUp $signUp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rec=SignUp::where('id',"=",$id)->first();
        return view('updateform',compact('rec'));
    }

    public function logout()
    {
        if(Session()->has('sign'))
        {
            Session()->pull('sign');
            return redirect('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $rec=signup::find($req->id);
        $rec->name=$req->Name;
        $rec->email=$req->Phone;
        $rec->email=$req->Email;
        $rec->save();
        return redirect('view');
    }

    public function profile($id)
    {
        $rec=signup::where('id',"=",$id)->first();
        return view('myProfile',compact('rec'));
        // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }

    public function profileUpdate(Request $req)
    {
        $rec=signup::find($req->id);
        $rec->Name=$req->Name;
        $rec->Phone=$req->Phone;
        $rec->Email=$req->Email;
        $rec->save();
        return view('myProfile',compact('rec'));
    }
    public function profileEdit($id)
    {
        $rec=signup::where('id',"=",$id)->first();
        return view('profileUpdate',compact('rec'));
        // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }

    public function del(Request $req)
    {
        // dd('error');
        $rec=signup::find($req->id)->delete();
        return redirect('view');
    }

    public function dashboard(Request $request)
    {
        //return "<h1 style='color:white;background-color:navy'>Welcome to dashboard</h1>";
        $myData = array();
        if (Session()->has('sign'))
        {
            $myData = signup::where('id',"=", Session()->get('sign'))->first();            
        }
        return view('home2', compact('myData'));
    }

    // public function profileUpdate(Request $request)
    // {
    //     $authUser = Auth::user();
    //     $request->validate([
    //         'Name' => 'required',
    //         'Phone' => 'required',
    //         'Email' => 'required|email',
    //     ]);
    //     $authUser->Name = $request->Name;
    //     $authUser->Phone = $request->Phone;
    //     $authUser->Email = $request->Email;
    //     $authUser->save();
    //     return redirect('home2');

    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SignUp  $signUp
     * @return \Illuminate\Http\Response
     */
    public function destroy(SignUp $signUp)
    {
        //
    }
}
