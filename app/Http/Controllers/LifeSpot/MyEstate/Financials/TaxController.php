<?php

namespace App\Http\Controllers\LifeSpot\MyEstate\Financials;

use App\Http\Controllers\Controller;
use App\Models\Tax;
use App\Models\TaxAsset;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

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
        $additionalAssets = TaxAsset::where('tax_id', $asset->id)->latest()->get();
        return view('lifespot.myestate.financials.taxes.show',compact('asset', 'additionalAssets'));
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


    public function StoreMultiImage(Request $request, Tax $asset) //NOTE $asset = $bank
    {
        $image = $request->file('multi_image');

        foreach ($image as $multi_image){
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();

            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            TaxAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'tax_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function DestroyMultiImage(TaxAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }

    public function showMulti(TaxAsset $additionalAsset)
    {
        return view('lifespot.myestate.financials.banking.show',compact('additionalAsset'));
    }
}
