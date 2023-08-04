<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Family;

use App\Models\User;
use App\Models\Gender;
use App\Models\BirthDay;
use App\Models\BirthMonth;
use Illuminate\Http\Request;
use App\Models\EmergencyContact;
use App\Http\Controllers\Controller;
use App\Models\EmergencyContactAsset;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class EmergencyContactController extends Controller
{
    public function index()
    {
        $assets = EmergencyContact::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.mylifespot.family.emergency_contacts.index', compact('assets'));
    }

    public function create()
    {
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.emergency_contacts.create',compact('months','days','genders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'email' => '',
            'phone' => '',
            'gender' => '',
            // 'relationship' => '',
            // 'isBeneficiary' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'st' => '',
            'zip' => '',
            'birth_month' => '',
            'birth_day' => '',
            'birth_year' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ],
            ['fname.required' => 'The first name field is required',
            'lname.required' => 'The last name field is required',
        ]);

        $validated['user_id'] = auth()->id();
        $validated['isBeneficiary'] = 0;
        $image = $request->thumbnail;

        if ($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400, function($constraint){
                $constraint->upsize();
            })->orientate()->save('thumbnails/'.$image_one);
            $validated['thumbnail'] = 'thumbnails/'.$image_one;
        }

        EmergencyContact::create($validated);
            return redirect('mylifespot/family/emergency-contacts');
    }

    public function show(EmergencyContact $asset)
    {
        $additionalAssets = EmergencyContactAsset::where('emergency_contact_id', $asset->id)->latest()->get();
        return view('lifespot.mylifespot.family.emergency_contacts.show',compact('asset','additionalAssets'));
    }

    public function edit(EmergencyContact $asset)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.emergency_contacts.edit', compact('asset','user','months','days','genders'));
    }

    public function update(Request $request, EmergencyContact $asset)
    {
        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'email' => '',
            'phone' => '',
            'gender' => '',
            // 'relationship' => '',
            // 'isBeneficiary' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'st' => '',
            'zip' => '',
            'birth_month' => '',
            'birth_day' => '',
            'birth_year' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ]);

        $validated['user_id'] =auth()->id();


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
             return redirect('/mylifespot/family/emergency-contacts/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
             return redirect('/mylifespot/family/emergency-contacts/'. $asset->id);
        }
    }

    public function destroy(EmergencyContact $asset)
    {

        if($asset->image){
            unlink($asset->thumbnail);
        }

        $asset->delete();
        return redirect('/mylifespot/family/emergency-contacts');
    }

    public function StoreMultiImage(Request $request, EmergencyContact $asset) //NOTE $asset = $emergency-contact
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

            EmergencyContactAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'emergency_contact_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function DestroyMultiImage(EmergencyContactAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }


    public function showMulti(EmergencyContactAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.family.emergency_contacts.show',compact('additionalAsset'));
    }
}
