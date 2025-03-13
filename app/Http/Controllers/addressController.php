<?php

namespace App\Http\Controllers;
use App\Models\address;
use Illuminate\Http\Request;

class addressController extends Controller
{

    public function index()
    {
        return view('Address');
    }

    public function store(Request $request)
    {
        $request->validate([
            'add' => 'required',
            'tiffOrd' => 'required',
        ]);
        $add = new address;
        $add->add=$request['add'];
        $add->tiffOrd=$request['tiffOrd'];
        $add->save();
        return redirect('dashboard');
    }

    public function view()
        {
            $allRecords=address::all();
            return view('viewAddress',compact('allRecords'));
        }
}
