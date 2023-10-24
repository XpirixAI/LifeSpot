<?php

namespace App\Http\Controllers\LifeSpot\MyEstate\Financials;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\BankAsset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BankingController extends Controller
{
    public function index()
    {
        $assets = Bank::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.myestate.financials.banking.index',compact('assets'));
    }


    public function create()
    {
        // $months = BirthMonth::all();
        // $days = BirthDay::all();
        // $genders = Gender::all();
        return view('lifespot.myestate.financials.banking.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bank_name' => 'required|max:50',
            'account_type' => '',
            'account_number' => '',
            'account_balance' => '',
            'contact_name' => '',
            'email' => '',
            'phone' => '',
            'inTrust' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ],
            ['bank_name.required' => 'The first name field is required',
            'lname.required' => 'The last name field is required',
        ]);

        $validated['user_id'] = auth()->id();
        if($request->has('inTrust')){
            //Checkbox checked
            $validated['inTrust'] = "on";
        }else{
            //Checkbox not checked
            $validated['inTrust'] = NULL;
        }
        $image = $request->thumbnail;

        if ($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400, function($constraint){
                $constraint->upsize();
            })->orientate()->save(public_path('thumbnails/'.$image_one));
            // })->orientate()->save('thumbnails/'.$image_one);

            $validated['thumbnail'] = 'thumbnails/'.$image_one;
        }

        Bank::create($validated);
        return redirect('/myestate/financials/banking');
    }

    public function StoreMultiImage(Request $request, Bank $asset) //NOTE $asset = $bank
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

            BankAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'bank_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function show(Bank $asset)
    {
        // $medical = PetMedical::where('pet_id', $asset->id)->latest()->get();
        // $guardian = PetGuardian::where('pet_id', $asset->id)->latest()->get();
        $additionalAssets = BankAsset::where('bank_id', $asset->id)->latest()->get();
        return view('lifespot.myestate.financials.banking.show',compact('asset','additionalAssets'));
    }

    public function edit(Bank $asset)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        // $months = BirthMonth::all();
        // $days = BirthDay::all();
        // $genders = Gender::all();
        return view('lifespot.myestate.financials.banking.edit', compact('asset'));
    }

    public function update(Request $request, Bank $asset)
    {
        $validated = $request->validate([
            'bank_name' => 'required|max:50',
            'account_type' => '',
            'account_number' => '',
            'account_balance' => '',
            'contact_name' => '',
            'email' => '',
            'phone' => '',
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
            })->orientate()->save(public_path('thumbnails/'.$image_one));
            // })->orientate()->save('thumbnails/'.$image_one);

            $validated['thumbnail'] = 'thumbnails/'.$image_one;

            $asset->update($validated);
            if($oldimage) {
                unlink($oldimage);
            }
             return redirect('/myestate/financials/banks/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
             return redirect('/myestate/financials/banks/'. $asset->id);
        }
    }

    public function destroy(Bank $asset)
    {

        if($asset->image){
            unlink($asset->thumbnail);
        }

        $asset->delete();
        return redirect('/myestate/financials/banking');
    }

    public function DestroyMultiImage(BankAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }

    public function showMulti(BankAsset $additionalAsset)
    {
        return view('lifespot.myestate.financials.banking.show',compact('additionalAsset'));
    }
}
