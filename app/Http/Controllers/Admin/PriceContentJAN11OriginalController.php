<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PriceContent;
use Illuminate\Http\Request;

class PriceContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\PriceContent  $priceContent
     * @return \Illuminate\Http\Response
     */
    public function show(PriceContent $priceContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PriceContent  $priceContent
     * @return \Illuminate\Http\Response
     */
    public function edit(PriceContent $priceContent)
    {
        $this->authorize('xpirix_edit');
        $priceContent = PriceContent::find(1);
        // return view('company_admin.priceContent.edit',compact('priceContent'));
        return view('admin.price.edit',compact('priceContent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PriceContent  $priceContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PriceContent $priceContent)
    {
        $this->authorize('xpirix_edit');
        $request->validate([
            'price_main_title' => 'required',
            'price_desc_heading' => 'required',
            'xpirix_plan_title' => 'required',
            'month_price_free' => 'required',
            'button_free_text' => 'required',
            'free_feature_1' => 'required',
            'free_feature_2' => 'required',
            'free_feature_3' => 'required',
            'free_feature_4' => 'required',
            'free_feature_5' => 'required',
            'free_feature_6' => 'required',
            'free_feature_7' => 'required',
            'basic_plan_title' => 'required',
            'month_price_basic' => 'required',
            'year_price_basic' => 'required',
            'button_basic_text' => 'required',
            'basic_feature_1' => 'required',
            'basic_feature_2' => 'required',
            'basic_feature_3' => 'required',
            'basic_feature_4' => 'required',
            'basic_feature_5' => 'required',
            'basic_feature_6' => 'required',
            'basic_feature_7' => 'required',
            'family_plan_title' => 'required',
            'month_price_family' => 'required',
            'year_price_family' => 'required',
            'button_family_text' => 'required',
            'family_feature_1' => 'required',
            'family_feature_2' => 'required',
            'family_feature_3' => 'required',
            'family_feature_4' => 'required',
            'family_feature_5' => 'required',
            'family_feature_6' => 'required',
            'family_feature_7' => 'required',
            'premium_plan_title' => 'required',
            'month_price_premium' => 'required',
            'year_price_premium' => 'required',
            'button_premium_text' => 'required',
            'premium_feature_1' => 'required',
            'premium_feature_2' => 'required',
            'premium_feature_3' => 'required',
            'premium_feature_4' => 'required',
            'premium_feature_5' => 'required',
            'premium_feature_6' => 'required',
            'premium_feature_7' => 'required',
            'title_additional_plans' => 'required',
            'desc_additional_plans' => 'required',
            'additonal_plans_title_1' => 'required',
            'additonal_plans_desc_1' => 'required',
            'button_addtional_plans_text_1' => 'required',
            'additonal_plans_title_2' => 'required',
            'additonal_plans_desc_2' => 'required',
            'button_addtional_plans_text_2' => 'required',
            'additonal_plans_title_3' => 'required',
            'additonal_plans_desc_3' => 'required',
            'button_addtional_plans_text_3' => 'required',
            'faq_section_title' => 'required',
            'faq_title_1' => 'required',
            'faq_desc_1' => 'required',
            'faq_title_2' => 'required',
            'faq_desc_2' => 'required',
            'faq_title_3' => 'required',
            'faq_desc_3' => 'required',
            'faq_title_4' => 'required',
            'faq_desc_4' => 'required',
            'carousel_testimonial_1' => 'required',
            'testiomonial_person_1' => 'required',
            'carousel_info_1' => 'required',
            'carousel_testimonial_2' => 'required',
            'testiomonial_person_2' => 'required',
            'carousel_info_2' => 'required',
            'carousel_testimonial_3' => 'required',
            'testiomonial_person_3' => 'required',
            'carousel_info_3' => 'required',
        ]);

        $priceContent->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PriceContent  $priceContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(PriceContent $priceContent)
    {
        //
    }
}
