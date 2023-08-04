<?php

namespace App\Http\Controllers;

use App\Models\XpirixContent;
use Illuminate\Http\Request;

class XpirixContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = XpirixContent::find(1);
        return view('xpirix.body.footer', compact('contents'));
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
     * @param  \App\Models\XpirixContent  $xpirixContent
     * @return \Illuminate\Http\Response
     */
    public function show(XpirixContent $xpirixContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\XpirixContent  $xpirixContent
     * @return \Illuminate\Http\Response
     */
    public function edit(XpirixContent $xpirixContent)
    {
        $this->authorize('xpirix_edit');
        $xpirixcontent = XpirixContent::find(1);
        return view('admin.xpirix.edit', compact('xpirixContent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\XpirixContent  $xpirixContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, XpirixContent $xpirixContent)
    {
        $this->authorize('xpirix_edit');
        $request->validate([
            'main_title' => 'required',
            'main_message' => 'required',
            'message_area' => 'required',
            'task_area' => 'required',
            'family_area_1' => 'required',
            'family_area_2' => 'required',
            'residence_area' => 'required',
            'trending_title' => 'required',
            'cta_1_title' => 'required',
            'cta_1_description' => 'required',
            'cta_button_text' => 'required',
            'footer_title' => 'required',
            'footer_message' => 'required',
            'footer_button_cta' => 'required',
            'footer_left_link_1' => 'required',
            'footer_left_link_2' => 'required',
            'footer_left_link_3' => 'required',
            'footer_left_link_4' => 'required',
            'footer_left_link_5' => 'required',
            'footer_middle_link_1' => 'required',
            'footer_middle_link_2' => 'required',
            'footer_middle_link_3' => 'required',
            'footer_middle_link_4' => 'required',
            'footer_middle_link_5' => 'required',
            'footer_middle_link_6' => 'required',
            'footer_right_link_1' => 'required',
            'footer_right_link_2' => 'required',
            'footer_right_link_3' => 'required',
            'footer_right_link_4' => 'required',
            'footer_right_link_5' => 'required',
            'facebook_url' => 'required',
            'twitter_url' => 'required',
            'instagram_url' => 'required',
            'youtube_url' => 'required',
            'linkedin_url' => 'required',
        ]);

        $xpirixContent->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\XpirixContent  $xpirixContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(XpirixContent $xpirixContent)
    {
        //
    }
}
