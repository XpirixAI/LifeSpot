<?php

namespace App\Http\Controllers;

use App\Models\Help_Lifespot;
use App\Models\XpirixContent;
use Illuminate\Http\Request;

class HelpLifespotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = XpirixContent::find(1); //For Footer Content
        return view('xpirix.body.help_center.lifespot_help.index', compact('contents'));
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
     * @param  \App\Models\Help_Lifespot  $help_Lifespot
     * @return \Illuminate\Http\Response
     */
    public function show(Help_Lifespot $help_Lifespot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Help_Lifespot  $help_Lifespot
     * @return \Illuminate\Http\Response
     */
    public function edit(Help_Lifespot $help_Lifespot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Help_Lifespot  $help_Lifespot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help_Lifespot $help_Lifespot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Help_Lifespot  $help_Lifespot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help_Lifespot $help_Lifespot)
    {
        //
    }
}
