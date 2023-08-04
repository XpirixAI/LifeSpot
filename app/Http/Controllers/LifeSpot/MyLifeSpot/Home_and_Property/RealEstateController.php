<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property;

use App\Http\Controllers\Controller;
use App\Models\HomeLien;
use App\Models\RealEstate;
use App\Models\RealEstateAsset;
use App\Models\RealestateLien;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RealEstateController extends Controller
{
    public function index()
    {
        $assets = RealEstate::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.mylifespot.home_property.real_estate.index',compact('assets'));
    }

    public function create()
    {
        return view('lifespot.mylifespot.home_property.real_estate.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'location' => 'max:255',
            'value' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'st' => '',
            'zip' => '',
            'isPrimary_residence' => '',
            'inTrust' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ]);

        $validated['user_id'] = auth()->id();
        $image = $request->thumbnail;

        if ($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400, function($constraint){
                $constraint->upsize();
            })->orientate()->save('thumbnails/'.$image_one);
            $validated['thumbnail'] = 'thumbnails/'.$image_one;
        }

        RealEstate::create($validated);
            return redirect('/mylifespot/property/real-estate');
    }


    public function StoreMultiImage(Request $request, RealEstate $asset)
    {

        // $assetId = $asset['id'];
        // $assetId = 7;
        // dd($assetId);
        // $validated = $request->validate([

        //     'multi_image' => 'file|max:5000|mimes:jpeg,png,jpg,webp',
        // ]);
        $image = $request->file('multi_image');

        foreach ($image as $multi_image){
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();

            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            RealEstateAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'real_estate_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }



    public function show(RealEstate $asset)
    {
        $creditor = RealestateLien::where('real_estate_id', $asset->id)->latest()->get();
        $additionalAssets = RealEstateAsset::where('real_estate_id', $asset->id)->latest()->get();

        return view('lifespot.mylifespot.home_property.real_estate.show',compact('asset','additionalAssets','creditor'));
    }

    public function edit(RealEstate $asset)
    {
        return view('lifespot.mylifespot.home_property.real_estate.edit', compact('asset'));
    }

    public function update(Request $request, RealEstate $asset)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'location' => 'max:255',
            'value' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'st' => '',
            'zip' => '',
            'isPrimary_residence' => '',
            'inTrust' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ]);

        $validated['user_id'] =auth()->id();
        if($request->has('isPrimary_residence')){
            //Checkbox checked
            $validated['isPrimary_residence'] = "on";
        }else{
            //Checkbox not checked
            $validated['isPrimary_residence'] = NULL;
        }

        if($request->has('inTrust')){
            //Checkbox checked
            $validated['inTrust'] = "on";
        }else{
            //Checkbox not checked
            $validated['inTrust'] = NULL;
        }

        $oldimage = $request->oldimage;
        $image = $request->thumbnail;

        if ($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400, function($constraint){
                $constraint->upsize();
            })->orientate()->save('thumbnails/'.$image_one);
            $validated['thumbnail'] = 'thumbnails/'.$image_one;

            $asset->update($validated);
            if($oldimage) {
                unlink($oldimage);
            }
            return redirect('/mylifespot/property/real-estate/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
            return redirect('/mylifespot/property/real-estate/'. $asset->id);
        }
    }

    public function destroy(RealEstate $asset)
    {

        if($asset->image){
            unlink($asset->thumbnail);
        }


        $asset->delete();
        return redirect('/mylifespot/property/real-estate');
    }

    public function DestroyMultiImage(RealEstateAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }

    public function showMulti(RealEstateAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.home_property.real_estate.show',compact('additionalAsset'));
    }

}
