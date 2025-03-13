<?php

namespace App\Http\Controllers;

use App\Models\tiffins;
use Illuminate\Http\Request;

class tiffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('typetiffin');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tiffins  $tiffins
     * @return \Illuminate\Http\Response
     */
    public function show(tiffins $tiffins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tiffins  $tiffins
     * @return \Illuminate\Http\Response
     */
    public function edit(tiffins $tiffins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tiffins  $tiffins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiffins $tiffins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tiffins  $tiffins
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiffins $tiffins)
    {
        //
    }
}
