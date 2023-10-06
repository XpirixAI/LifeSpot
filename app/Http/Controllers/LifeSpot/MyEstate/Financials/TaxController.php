<?php

namespace App\Http\Controllers\LifeSpot\MyEstate\Financials;

use App\Http\Controllers\Controller;
use App\Models\Tax;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets = Tax::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.myestate.financials.taxes.index',compact('assets'));

        // return view('lifespot.myestate.financials.taxes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lifespot.myestate.financials.taxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'account_type' => 'required',
            'account_number' => 'required',
            'account_description' => '',
            'tax_advisor' => '',
            'contact_name' => '',
            'email' => '',
            'phone' => '',
            'special-notes' => '',
        ]);
        $validated['user_id'] = auth()->id();

        Tax::create($validated);
        return redirect()->route('myestate.financials.tax');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function show(Tax $asset)
    {
        return view('lifespot.myestate.financials.taxes.show',compact('asset'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function edit(Tax $asset)
    {
        return view('lifespot.myestate.financials.taxes.edit',compact('asset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaxRequest  $request
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tax $asset)
    {
        Log::info(['update() fired:', $asset]);
        $validated = $request->validate([
            'account_type' => 'required',
            'account_number' => 'required',
            'account_description' => '',
            'tax_advisor' => '',
            'contact_name' => '',
            'email' => '',
            'phone' => '',
            'special-notes' => '',
        ]);
        $validated['user_id'] = auth()->id();
        $asset->update($validated);

        // return redirect()->route('myestate.financials.tax');

        return redirect()->route('myestate.financials.show.tax', $asset->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tax $asset)
    {
        $asset->delete();
        return redirect()->back();
    }
}
