<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Family;

use App\Http\Controllers\Controller;
use App\Models\BirthDay;
use App\Models\BirthMonth;
use App\Models\Gender;
use App\Models\Pet;
use App\Models\PetAsset;
use App\Models\PetGuardian;
use App\Models\PetMedical;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PetsController extends Controller
{
    public function index()
    {
        $assets = Pet::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.mylifespot.family.pets.index',compact('assets'));
    }

    public function create()
    {
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.pets.create',compact('months','days','genders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            // 'email' => '',
            'description' => '',
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
            'emergency_contact' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ],
            ['fname.required' => 'The first name field is required',
            'lname.required' => 'The last name field is required',
        ]);

        $validated['user_id'] = auth()->id();
        // $validated['isBeneficiary'] = 0;
        $image = $request->thumbnail;

        if ($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400, function($constraint){
                $constraint->upsize();
            })->orientate()->save('thumbnails/'.$image_one);
            $validated['thumbnail'] = 'thumbnails/'.$image_one;
        }

        Pet::create($validated);
            return redirect('/mylifespot/family/pets');
    }

    public function StoreMultiImage(Request $request, Pet $asset) //NOTE $asset = $pet
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

            PetAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'pet_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function show(Pet $asset)
    {
        $medical = PetMedical::where('pet_id', $asset->id)->latest()->get();
        $guardian = PetGuardian::where('pet_id', $asset->id)->latest()->get();
        $additionalAssets = PetAsset::where('pet_id', $asset->id)->latest()->get();
        return view('lifespot.mylifespot.family.pets.show',compact('asset','additionalAssets','guardian','medical'));
    }

    public function edit(Pet $asset)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.pets.edit', compact('asset','user','months','days','genders'));
    }

    public function update(Request $request, Pet $asset)
    {
        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            // 'email' => '',
            'description' => '',
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
            'emergency_contact' => '',
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
             return redirect('/mylifespot/family/pets/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
             return redirect('/mylifespot/family/pets/'. $asset->id);
        }
    }

    public function destroy(Pet $asset)
    {

        if($asset->image){
            unlink($asset->thumbnail);
        }

        $asset->delete();
        return redirect('/mylifespot/family/pets');
    }

    public function DestroyMultiImage(PetAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }

    public function showMulti(PetAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.family.pets.show',compact('additionalAsset'));
    }
}
