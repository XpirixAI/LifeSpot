<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Family;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\BirthDay;
use App\Models\BirthMonth;
use App\Models\Gender;
use App\Models\Spouse;
use App\Models\SpouseAsset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SpouseController extends Controller
{
    public function index()
    {
        $assets = Spouse::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.mylifespot.family.spouse.index',compact('assets'));
    }

    public function create()
    {
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.spouse.create',compact('months','days','genders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'isBeneficiary' => '',
            // 'estate_role' => '',
            'email' =>  '',
            'phone' => '',
            // 'gender' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'st' => '',
            'zip' => '',
            'birth_month' => '',
            'birth_day' => '',
            'birth_year' => '',
            // 'birthdate' => '',
            'anniversary_month' => '',
            'anniversary_day' => '',
            'anniversary_year' => '',
            'anniversary_year' => '',
            // 'anniversarydate' => '',
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


        if($request->has('isBeneficiary')){
            //Checkbox checked
            $validated['isBeneficiary'] = "on";
            Beneficiary::create($validated);
        }else{
            //Checkbox not checked
            $validated['isBeneficiary'] = NULL;
        }
        $validated['estate_role'] = $request->estate_role; //this is added after the above $validated, otherwise I need a field on the Beneficiaries for 'estate_role'
        Spouse::create($validated);
            return redirect('/mylifespot/family/spouse');
    }

    public function StoreMultiImage(Request $request, Spouse $asset) //NOTE $asset = $spouse
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

            SpouseAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'spouse_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function show(Spouse $asset)
    {
        // $activity = DependentActivity::where('dependent_id', $asset->id)->latest()->get();
        // $school = DependentSchool::where('dependent_id', $asset->id)->latest()->get();
        // $medical = DependentMedical::where('dependent_id', $asset->id)->latest()->get();
        // $guardian = DependentGuardian::where('dependent_id', $asset->id)->latest()->get();
        $additionalAssets = SpouseAsset::where('spouse_id', $asset->id)->latest()->get();
        return view('lifespot.mylifespot.family.spouse.show',compact('asset','additionalAssets'));
    }

    public function edit(Spouse $asset)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.spouse.edit', compact('asset','user','months','days','genders'));
    }

    public function update(Request $request, Spouse $asset)
    {

        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'isBeneficiary' => '',
            'estate_role' => '',
            'email' =>  '',
            'phone' => '',
            // 'gender' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'st' => '',
            'zip' => '',
            'birth_month' => '',
            'birth_day' => '',
            'birth_year' => '',
            // 'birthdate' => '',
            'anniversary_month' => '',
            'anniversary_day' => '',
            'anniversary_year' => '',
            'anniversary_year' => '',
            // 'anniversarydate' => '',
            'notes_wishes' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
        ],
            ['fname.required' => 'The first name field is required',
            'lname.required' => 'The last name field is required',
        ]);

        $validated['user_id'] =auth()->id();
        if($request->has('isBeneficiary')){
            //Checkbox checked
            $validated['isBeneficiary'] = "on";
        }else{
            //Checkbox not checked
            $validated['isBeneficiary'] = NULL;
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
            $safeToUnlink = $asset->isBeneficiary;
            if($safeToUnlink == NULL) {
                    if($oldimage) {
                    unlink($oldimage);
                }
            }
            // if($oldimage) {
            //     unlink($oldimage);
            // }
             return redirect('/mylifespot/family/spouses/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
            //  return redirect('/mylifespot/family/spouse');
             return redirect('/mylifespot/family/spouses/'. $asset->id);
        }
    }

    public function destroy(Spouse $asset)
    {
        if($asset->image){
            unlink($asset->thumbnail);
        }

        $asset->delete();
        return redirect('/mylifespot/family/spouse');
    }

    public function DestroyMultiImage(SpouseAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }


    public function showMulti(SpouseAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.family.spouse.show',compact('additionalAsset'));
    }
}
