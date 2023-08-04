<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Home_and_Property;

use Carbon\Carbon;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Models\AdditionalAsset;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AssetLien;
use Intervention\Image\Facades\Image;

class PropertyController extends Controller
{
    public function index()
    {
        $assets = Asset::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.mylifespot.home_property.property.index',compact('assets'));
    }

    public function create()
    {
        return view('lifespot.mylifespot.home_property.property.create');
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

        Asset::create($validated);
            return redirect('/mylifespot/property');
    }

    public function StoreMultiImage(Request $request, Asset $asset)
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

            AdditionalAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'asset_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function show(Asset $asset)
    {
        $creditor = AssetLien::where('asset_id', $asset->id)->latest()->get();
        $additionalAssets = AdditionalAsset::where('asset_id', $asset->id)->latest()->get();
        return view('lifespot.mylifespot.home_property.property.show',compact('asset','additionalAssets','creditor'));
    }

    public function edit(Asset $asset)
    {
        return view('lifespot.mylifespot.home_property.property.edit', compact('asset'));
    }

    public function update(Request $request, Asset $asset)
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
            'inTrust' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ]);

        $validated['user_id'] =auth()->id();
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
            return redirect('/mylifespot/property/asset/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
            return redirect('/mylifespot/property/asset/'. $asset->id);
        }
    }

    public function destroy(Asset $asset, AdditionalAsset $additionalAsset )
    {

        if($asset->image){
            unlink($asset->thumbnail);
        }


        $asset->delete();
        return redirect('/mylifespot/property');
    }

    public function DestroyMultiImage(AdditionalAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }

    public function showMulti(AdditionalAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.home_property.property.show',compact('additionalAsset'));
    }

}


