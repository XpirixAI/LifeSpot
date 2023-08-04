<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Family;

use App\Http\Controllers\Controller;
use App\Models\BirthDay;
use App\Models\BirthMonth;
use App\Models\Dependent;
use App\Models\Beneficiary;
use App\Models\DependentActivity;
use App\Models\DependentAsset;
use App\Models\DependentGuardian;
use App\Models\DependentMedical;
use App\Models\DependentSchool;
use App\Models\Gender;
use App\Models\MarritalStatus;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class DependentController extends Controller
{
    public function index()
    {
        $assets = Dependent::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.mylifespot.family.dependents.index',compact('assets'));
    }

    public function create()
    {
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.dependents.create',compact('months','days','genders'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            // 'email' =>  'unique:dependents',
            'email' =>  '',
            'phone' => '',
            'gender' => '',
            'relationship' => '',
            'isBeneficiary' => '',
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
        // $validated['isBeneficiary'] = 0;



        $image = $request->thumbnail;

        if ($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400, function($constraint){
                $constraint->upsize();
            })->orientate()->save('thumbnails/'.$image_one);
            $validated['thumbnail'] = 'thumbnails/'.$image_one;
        }

        // $isBeneficiary = $validated['isBeneficiary'] = $request->has('isBeneficiary');
        // if($isBeneficiary) {
        //     Beneficiary::create($validated);
        //     // $validated['isBeneficiary'] = "on"; //Set this after Beneficiary is
        // }
        // dd($isBeneficiary);

        if($request->has('isBeneficiary')){
            //Checkbox checked
            $validated['isBeneficiary'] = "on";
            Beneficiary::create($validated);
        }else{
            //Checkbox not checked
            $validated['isBeneficiary'] = NULL;
        }
        Dependent::create($validated);
            return redirect('/mylifespot/family/dependents');
    }

    public function StoreMultiImage(Request $request, Dependent $asset) //NOTE $asset = $dependent
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

            DependentAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'dependent_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function show(Dependent $asset)
    {
        $activity = DependentActivity::where('dependent_id', $asset->id)->latest()->get();
        $school = DependentSchool::where('dependent_id', $asset->id)->latest()->get();
        $medical = DependentMedical::where('dependent_id', $asset->id)->latest()->get();
        $guardian = DependentGuardian::where('dependent_id', $asset->id)->latest()->get();
        $additionalAssets = DependentAsset::where('dependent_id', $asset->id)->latest()->get();
        return view('lifespot.mylifespot.family.dependents.show',compact('asset','additionalAssets','guardian','medical','school','activity'));
    }

    public function edit(Dependent $asset)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.dependents.edit', compact('asset','user','months','days','genders'));
    }

    public function update(Request $request, Dependent $asset)
    {

        $validated = $request->validate([
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'email' =>  '',
            'phone' => '',
            'gender' => '',
            'relationship' => '',
            'isBeneficiary' => '',
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
             return redirect('/mylifespot/family/dependents/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
            //  return redirect('/mylifespot/family/dependents');
             return redirect('/mylifespot/family/dependents/'. $asset->id);
        }
    }

    public function destroy(Dependent $asset)
    {
        if($asset->image){
            unlink($asset->thumbnail);
        }

        $asset->delete();
        return redirect('/mylifespot/family/dependents');
    }

    public function DestroyMultiImage(DependentAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }

    //?? This MAY Belong on the DependentController????
    public function showMulti(DependentAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.family.dependents.show',compact('additionalAsset'));
    }
}
