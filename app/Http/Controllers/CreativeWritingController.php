<?php

namespace App\Http\Controllers;

use App\Models\CreativeWriting;
use Illuminate\Http\Request;

class CreativeWritingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.creative-writing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('front.creative-writing');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreativeWriting  $creativeWriting
     * @return \Illuminate\Http\Response
     */
    public function show(CreativeWriting $creativeWriting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreativeWriting  $creativeWriting
     * @return \Illuminate\Http\Response
     */
    public function edit(CreativeWriting $creativeWriting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreativeWriting  $creativeWriting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreativeWriting $creativeWriting)
    {
        //
    }
}
