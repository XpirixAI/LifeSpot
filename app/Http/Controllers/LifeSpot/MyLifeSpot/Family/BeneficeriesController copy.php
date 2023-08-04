<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot\Family;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\BeneficiaryAsset;
use App\Models\BirthDay;
use App\Models\BirthMonth;
use App\Models\Gender;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BeneficeriesController extends Controller
{
    public function index()
    {
        $assets = Beneficiary::where('user_id', auth()->user()->id)->latest()->get();
        return view('lifespot.mylifespot.family.beneficeries.index',compact('assets'));
    }

    public function create()
    {
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.beneficeries.create',compact('months','days','genders'));
    }

    public function store(Request $request)
    {

       if($request->isEntity == 'Person'){
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
        $validated['entity_name'] = 'Human';
        $validated['isEntity'] = 'Person';
       } else {
        $validated = $request->validate([
            'entity_name' => 'required|max:50',
            // 'lname' => 'required|max:50',
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
        $validated['fname'] = 'Organization';
        $validated['lname'] = 'Organization';
        $validated['isEntity'] = 'Entity';
       }


        $image = $request->thumbnail;

        if ($image){
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400, function($constraint){
                $constraint->upsize();
            })->orientate()->save('thumbnails/'.$image_one);
            $validated['thumbnail'] = 'thumbnails/'.$image_one;
        }

        Beneficiary::create($validated);
            return redirect('/mylifespot/family/beneficeries');
    }

    public function show(Beneficiary $asset)
    {
        $additionalAssets = BeneficiaryAsset::where('beneficiary_id', $asset->id)->latest()->get();
        return view('lifespot.mylifespot.family.beneficeries.show',compact('asset','additionalAssets'));
    }

    public function edit(Beneficiary $asset)
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        return view('lifespot.mylifespot.family.beneficeries.edit', compact('asset','user','months','days','genders'));
    }

    public function update(Request $request, Beneficiary $asset)
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
            $safeToUnlink = $asset->isBeneficiary; //DB column isBeneficiary if marked as "on" means that this data row was automatically create by checking the "isBeneficiary" box on the dependent create form, otherwise, this column would be NULL becuase the user manually created this column and there is no input that they can access. (technically this column should be renamed to something more meaningful on the Beneficiaries table)

            if($safeToUnlink == NULL) {
                    if($oldimage) {
                    unlink($oldimage);
                }
            }
            // dd($safeToUnlink);
            // if($oldimage) {
            //     unlink($oldimage);
            // }
             return redirect('/mylifespot/family/beneficeries/'. $asset->id);
        } else {
            $validated['thumbnail'] = $oldimage;

            $asset->update($validated);
             return redirect('/mylifespot/family/beneficeries/'. $asset->id);
        }
    }

    public function destroy(Beneficiary $asset)
    {

        if($asset->image){
            unlink($asset->thumbnail);
        }

        $asset->delete();
        return redirect('/mylifespot/family/beneficeries');
    }

    public function StoreMultiImage(Request $request, Beneficiary $asset) //NOTE $asset = $beneficiary
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

            BeneficiaryAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'beneficiary_id' => $asset['id'],
            ]);
        }
        return redirect()->back();
    }

    public function DestroyMultiImage(BeneficiaryAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }


    public function showMulti(BeneficiaryAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.family.beneficeries.show',compact('additionalAsset'));
    }
}
