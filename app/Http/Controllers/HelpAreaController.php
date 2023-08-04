<?php

namespace App\Http\Controllers;

use App\Models\Help_area;
use App\Models\XpirixContent;
use Illuminate\Http\Request;

class HelpAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('help_areas');
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
     * @param  \App\Models\Help_area  $help_area
     * @return \Illuminate\Http\Response
     */
    public function show(Help_area $help_area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Help_area  $help_area
     * @return \Illuminate\Http\Response
     */
    public function edit(Help_area $help_area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Help_area  $help_area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Help_area $help_area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Help_area  $help_area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Help_area $help_area)
    {
        //
    }
}
