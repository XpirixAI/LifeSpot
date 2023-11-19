<?php

namespace App\Http\Controllers\LifeSpot\MyLifeSpot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BirthDay;
use App\Models\BirthMonth;
use App\Models\Gender;
use App\Models\MarritalStatus;
use App\Models\PersonalAsset;
use App\Models\PersonalInfoAssets;
use App\Models\PersonalInformation as ModelsPersonalInformation;
use App\Models\PersonalInformationAsset;
use App\Models\User;
use App\Models\UserActivity;
use App\Models\UserEducation;
use App\Models\UserMedical;
use App\Models\UserMilitary;
use App\Models\UserSpouse;
use App\Models\UserWork;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PersonalInfoController extends Controller
{
    public function show(ModelsPersonalInformation $asset)
    {
        $images =
        $personal_information = ModelsPersonalInformation::firstOrCreate([
            'user_id' => Auth::user()->id,
        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        $medical = UserMedical::where('user_id', $id)->latest()->get();
        $activity = UserActivity::where('user_id', $id)->latest()->get();
        $work = UserWork::where('user_id', $id)->latest()->get();
        $spouse = UserSpouse::where('user_id', $id)->latest()->get();
        $education = UserEducation::where('user_id', $id)->latest()->get();
        $military = UserMilitary::where('user_id', $id)->latest()->get();
        $additionalAssets = PersonalAsset::where('user_id', $id)->latest()->get();
        $asset = $personal_information;
        return view('lifespot.mylifespot.personal_info.show',compact('user', 'asset','medical','activity','work','spouse','education','military','additionalAssets'));
    }

    public function edit()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $months = BirthMonth::all();
        $days = BirthDay::all();
        $genders = Gender::all();
        $marital_status = MarritalStatus::all();
        return view('lifespot.mylifespot.personal_info.edit',compact('user','months','days','genders','marital_status'));
    }

    public function update(Request $request, User $user)
    {
        Log::info('DEV: PersonalInfoController::update() fired');
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'uname' => 'required',
            'email' => 'required',
            ],
            ['fname.required' => 'The first name field is required',
            'lname.required' => 'The last name field is required',
            'uname.required' => 'The username field is required',
            'email.required' => 'The email field is required',
        ]);
        $data['name'] = $request->fname.' '.$request->lname;

        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = date('YmdHi').$file->getClientOriginalName();
            Image::make($file)->resize(200,200, function($const) {
                $const->aspectRatio();
            });

            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_photo_path'] = $filename;
        }

        $user->update($data);

        $personalInfo = $request->validate([
            'phone' => '',
            'alt_phone' => '',
            'birth_month' => '',
            'birth_day' => '',
            'birth_year' => ['nullable', 'numeric', 'digits:4'],
            'marital_status' => '',
            'gender' => '',
            'number_of_dependents' => '',
            'notes_wishes' => '',
            'address' => '',
            'address2' => '',
            'city' => '',
            'st' => '',
            'zip' => '',
        ]);

        ModelsPersonalInformation::updateOrCreate(['user_id' => $user->id], $personalInfo);
        // return redirect('lifespot/mylifespot/personal');
        return redirect()->route('mylifespot.personal');
        // return view('lifespot.mylifespot.personal_info.show',compact('user'));

    }

    public function StoreMultiImage(Request $request)
    {
        $user = Auth::user()->id;
        // dd($user);
        // $assetId = $asset['id'];
        // $assetId = 7;
        // dd($assetId);
        // $validated = $request->validate([

        //     'multi_image' => 'file|max:5000|mimes:jpeg,png,jpg,webp',
        // ]);
        $image = $request->file('multi_image');
        // $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        // $image->move(public_path('images'),$imageName);
        $image->move(public_path('upload/multi'),$imageName);

        foreach ($image as $multi_image){
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();

            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            PersonalAsset::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
                'user_id' => auth()->user()->id,
                'user_id' => $user,
            ]);
        }
        return redirect()->back();



        // $image = $request->file('file');

        // $imageName = time().'.'.$image->extension();
        // $image->move(public_path('images'),$imageName);

        // return response()->json(['success'=>$imageName]);
    }

    public function DestroyMultiImage(PersonalAsset $additionalAsset)
    {
        unlink($additionalAsset->multi_image);
        $additionalAsset->delete();
        return redirect()->back();
    }

    public function showMulti(PersonalAsset $additionalAsset)
    {
        return view('lifespot.mylifespot.personal_info.show',compact('additionalAsset'));
    }


    /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone()
    {
        return view('dropzone-view');
    }

    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $user = Auth::user()->id;
        $image = $request->file('file');

        $imageName = time().'.'.$image->extension();
        // $image->move(public_path('images'),$imageName);
        $image->move(public_path('upload/multi'),$imageName);
        PersonalAsset::insert([
            'multi_image' => 'upload/multi/'.$imageName,
            'created_at' => Carbon::now(),
            // 'user_id' => auth()->user()->id,
            'user_id' => $user,
        ]);


        // $image = $request->file('multi_image');

        foreach ($image as $multi_image){
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url = 'upload/multi/'.$name_gen;

            // PersonalAsset::insert([
            //     'multi_image' => $save_url,
            //     'created_at' => Carbon::now(),
            //     'user_id' => auth()->user()->id,
            //     'user_id' => $user,
            // ]);
        }

        return response()->json(['success'=>$imageName]);
    }



//     public function StoreMultiImage(Request $request, ModelsPersonalInformation $asset)
    //     {
    // // dd($asset);
    //         // $assetId = $asset['id'];
    //         // $assetId = 7;
    //         // dd($assetId);
    //         // $validated = $request->validate([

    //         //     'multi_image' => 'file|max:5000|mimes:jpeg,png,jpg,webp',
    //         // ]);
    //         $image = $request->file('multi_image');

    //         foreach ($image as $multi_image){
    //             $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();

    //             Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
    //             $save_url = 'upload/multi/'.$name_gen;

    //             PersonalInfoAssets::insert([
    //                 'multi_image' => $save_url,
    //                 'created_at' => Carbon::now(),
    //                 'user_id' => auth()->user()->id,
    //                 // 'personal_information_id' => $asset['id'],
    //             ]);
    //         }
    //         return redirect()->back();
    //     }

    //     public function DestroyMultiImage(PersonalInfoAssets $additionalAsset)
    //     {
    //         unlink($additionalAsset->multi_image);
    //         $additionalAsset->delete();
    //         return redirect()->back();
    //     }

    //     public function showMulti(PersonalInfoAssets $additionalAsset)
    //     {
    //         return view('lifespot.mylifespot.personal_info.show',compact('additionalAsset'));
//     }

    public function test_stripe_api(Request $request)
    {
        Log::info('DEV: testStripeAPI() fired');
        $user = Auth::user();

        $stripe = new \Stripe\StripeClient(env('STRIPE_PRIV_KEY'));
        $customer = $stripe->customers->create([
            'name' => $user->name,
            'email' => $user->email,
        ]);
        
        Log::info(['DEV: $customer', $customer->id]);

        return redirect()->back();
    }
}
