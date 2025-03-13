<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploadform');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save1(Request $request)
    {
        $request->validate([
            
            'img'=>'required|image|mimes:jpg,png,jpeg,gif',
            'name'=>'required',
            'price'=>'required',
            
            
        ]);
        // signup::create($request->all());
        //return redirect()->route('signup1')->with('success','user signed up successfully');
        $file=$request->file('img');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/gallery/',$filename);
        $tiffin=new products;
        $tiffin->img=$filename;
        $tiffin->path=$file;
        $tiffin->name=$request->name;
        $tiffin->price=$request->price;
        $tiffin->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show_gallery()
    {
        $allImages=products::all();
        // $allImages=products::paginate(3);
        $myData=compact('allImages');

        return view('uploadpage')->with($myData);
    }

    public function show_Admin_Gallery()
    {
        $allImages=products::all();
        
        $myData=compact('allImages');

        return view('imageGalleryAdmin')->with($myData);
    }

    public function show_gall()
    {
        $allImages=products::all();
        $myData=compact('allImages');
        return view('prod')
         ->with($myData)
        ;
    }

    public function productdes($id)
    {
        $rec=products::where('id',"=",$id)->first();
        return view('description',compact('rec'));
       
    }

    public function del(Request $req)
    {
        // dd('error');
        $rec=products::find($req->id)->delete();
        return redirect('adminImage');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rec=products::where('id',"=",$id)->first();
        return view('productupload',compact('rec'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        
    
        $rec=products::find($req->id);
        $rec->img=$req->img;
        $rec->save();
        return redirect('adminImage');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
