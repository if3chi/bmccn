<?php

namespace App\Http\Controllers;

use App\Models\CreativeWriting;
use Illuminate\Support\Facades\Mail;
use App\Mail\EssaySubmissionRecieved;
use App\Http\Requests\CreativeWritingRequest;

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
    public function store(CreativeWritingRequest $request)
    {

        $validatedData = $request->validated();
        $validatedData['essay'] = textNl2br($validatedData['essay']);

        $creativeWriting = CreativeWriting::create($validatedData);

        if ($creativeWriting) {

            Mail::to($creativeWriting->email)
                ->queue(new EssaySubmissionRecieved($creativeWriting->lastname));

            session()->flash('essay', "Essay submitted successfully, Kindly check the email you provided for more details.");
        }

        return back();
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
    public function update(CreativeWritingRequest $request, CreativeWriting $creativeWriting)
    {
        //
    }
}
