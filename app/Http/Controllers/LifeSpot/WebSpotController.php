<?php

namespace App\Http\Controllers\LifeSpot;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Myxpirix;
use Illuminate\Http\Request;
use App\Models\XpirixContent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class WebSpotController extends Controller
{
    public function index()
    {
        // $myxpirix = Myxpirix::firstOrCreate([
        //     'user_id' => Auth::user()->id,
        //     'nav_3' => 'My Stuff',
        //     'title' => 'Digital World',
        //     'line_1' => 'Transform how YOU store, share, and upload content.',
        //     'line_2' => 'This is YOUR website. Change it EVERYDAY or whenever you wish. Make any parts of it public and or private. You\'re in control.',
        //     'line_3' => 'Store and organize your favorite recipes, photos, or anything you want.',
        //     'line_4' => 'Go ahead and customize your world.',
        //     'cta_button' => 'Edit this Button ',
        //     'left_color' => 'blue-500',
        //     'right_color' => 'blue-500',
        //     'thumbnail' => 'thumbnails/63d7fa024bc49.jpeg',
        //     'small_image' => 'NULL',
        // ]);
        // dd($myxpirix);
//           if(Myxpirix::find(Auth::user()->id) !=NULL) {
//             Myxpirix::find(Auth::user()->id);
//             $myxpirix = Myxpirix::find(Auth::user()->id);
//         } else {

//             $validated = ([
//                 'nav_3' => 'My Stuff',
//                 'title' => 'Digital World',
//                 'line_1' => 'Transform how YOU store, share, and upload content.',
//                 'line_2' => 'This is YOUR website. Change it EVERYDAY or whenever you wish. Make any parts of it public and or private. You\'re in control.',
//                 'line_3' => 'Store and organize your favorite recipes, photos, or anything you want.',
//                 'line_4' => 'Go ahead and customize your world.',
//                 'cta_button' => 'Edit this Button ',
//                 'left_color' => 'blue-500',
//                 'right_color' => 'blue-500',
//                 'thumbnail' => 'thumbnails/63d7fa024bc49.jpeg',
//                 'small_image' => 'NULL',
//             ]);

//             $validated['user_id'] = auth()->id();

//             // $image = NULL;

// $user= Auth::user()->id;

//             Myxpirix::firstOrCreate($validated);
//             $myxpirix = Myxpirix::where('user_id', auth()->id());
//             // $myxpirix = Myxpirix::find(Auth::user()->id);
//             // $myxpirix = DB::table('myxpirixes','user_id',$user);
//             dd($myxpirix);
//         }
//         // $user = Auth::user()->id;
//         // dd($user);
//         // Myxpirix::find(Auth::user()->id);
//         // $myxpirix = $user;
//         // dd($myxpirix);
//         // $myxpirix = Myxpirix::firstOrCreate(Auth::user()->id);

//         // $myxpirix = Myxpirix::firstOrCreate(Auth::user()->id);
//         // $myxpirix = Myxpirix::find(Auth::user()->id);
//         // $myxpirix = Myxpirix::where('user_id', auth()->id());

        $posts = Post::latest()->paginate(10);
        $myxpirix = Myxpirix::find(Auth::user()->id);
        $contents = XpirixContent::find(1);
        $categories = Category::all();
        if(Auth::check()) {

            if(!$myxpirix) {
                $myxpirix = Myxpirix::firstOrCreate([
                    'user_id' => Auth::user()->id,

                ]);
            // }
                // $myxpirix = Myxpirix::find($myxpirix);
                // dd($myxpirix);
                // $data = $myxpirix->update([
                //     'nav_3' => 'My Stuff',
                //     'title' => 'Digital World',
                //     'line_1' => 'Transform how YOU store, share, and upload content.',
                //     'line_2' => 'This is YOUR website. Change it EVERYDAY or whenever you wish. Make any parts of it public and or private. You\'re in control.',
                //     'line_3' => 'Store and organize your favorite recipes, photos, or anything you want.',
                //     'line_4' => 'Go ahead and customize your world.',
                //     'cta_button' => 'Edit this Button ',
                //     'left_color' => 'blue-500',
                //     'right_color' => 'blue-500',
                //     'thumbnail' => 'thumbnails/63d7fa024bc49.jpeg',
                //     'small_image' => 'NULL',
                // ]);
            }

            return view('lifespot.webspot.index', compact('contents','categories','myxpirix'),[
                'posts' => Post::
                    // where('isPublic','public')
                    // ->where('isPublished','Published')

                    where('user_id', auth()->user()->id)
                    // ->orwhere('isPublic','private')->where('isPublished','Published')
                    // ->latest()
                    ->orderBy('updated_at','desc')
                    ->orderBy('user_id','desc')->filter(
                        request(['author','category','search']))
                            ->paginate(9)
                            // ->simplePaginate(6)
                            ->withQueryString(),
                            // ->get(),
            ]);
            } else {

                return view('lifespot.getting_started.index', compact('contents','categories','myxpirix'),[
                    'posts' => Post::where('isPublic','public')
                        ->where('isPublished','Published')
                        // ->orWhere('user_id', auth()->user()->id)->where('isPublic','private')

                        // ->latest()
                        ->orderBy('updated_at','desc')
                        ->filter(
                            request(['author', 'category','search']))
                                 ->paginate(9)
                                // ->simplePaginate(6)
                                ->withQueryString(),
                                // ->get(),
                ]);
        }
        // return view('lifespot.webspot.index');
    }

    // public function create()
    // {
    //     return view('lifespot.webspot.create');
    // }

    public function edit(Myxpirix $myxpirix)
    {
        return view('lifespot.webspot.edit', compact('myxpirix'));
    }

    public function update(Request $request, Myxpirix $myxpirix)
    {
        // dd($myxpirix);
        // $myxpirix = Myxpirix::where('user_id', Auth::user()->id );
        $validated = request()->validate([
            'nav_3' => '',
            'title' => 'max:40',
            'line_1' => '',
            'line_2' => '',
            'line_3' => '',
            'line_4' => '',
            'cta_button' => '',
            'left_color' => '',
            'right_color' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
            'small_image' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
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

            $myxpirix->update($validated);
            if($oldimage) {
                unlink($oldimage);
            }

        return redirect('lifespot/my-xpirix');
        // return redirect('lifespot.webspot.index/',compact('myxpirix'));
        } else {
            $validated['thumbnail'] = $oldimage;

            $myxpirix->update($validated);
            return redirect('lifespot/my-xpirix');
            // return redirect('lifespot.webspot.index/',compact('myxpirix'));
        }
    }


    public function createMyXpirixPost()
    {
        $categories = Category::all();
        return view('lifespot.webspot.blogs.create',compact('categories'));
    }

    public function storeMyXpirixPost(Request $request)
    {
        $data = request()->validate([
            'title' => 'required|max:120',
            'category_id' => 'required',
            'excerpt' => 'max:200',
            // 'slug' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
            // 'thumbnail' => 'required|file|max:3000',
            // 'excerpt' => 'required',
            'body' => 'max:10000',
            'isPublished' => 'required',
            'isPublic' => 'required',

        ]);
        // $data['slug'] = str_slug('title', '-');
        // $data['slug'] = $data['title'].random_int(0,24);
        // $data['slug'] = Str::of($data['title'])->slug('-');
        // $data['slug'] = $this->Str::of($data['title'])->slug('-');
        // $this->slug = 'eMYTeST-Slug';
        // $data['slug'] = Str::of($request->$data['title']->slug('-'));
        $data['slug'] = $data['title'];
        $data['user_id'] =auth()->id();


        $image = $request->thumbnail;



        //???????????  $image = (new ImageManager('gd'))->make('thumbnails/example1.jpg');
        // if($image =='gd') {
                // Image::make('thumbnails/example1.jpg');
                // }
            if($image){
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                // Image::make($image)->resize(300,300)->orientate()

                // Image::make($image)->resize(600,600)

                // ->resize(600, null, function ($constraint) {
                //     $constraint->aspectRatio();
                // })
                // ->crop(100, 100, 25, 25)
                // Image::make($image)

                // Image::make($image)->fit(200)->orientate()->save('thumbnails/'.$image_one)

                Image::make($image)->resize(800, 600, function ($constraint) {
                    $constraint->upsize();
                })
                ->orientate()
                ->save('thumbnails/'.$image_one);
                $data['thumbnail'] = 'thumbnails/'.$image_one;

            Post::create($data);
            return redirect('lifespot/my-xpirix');
        } else {
            // return redirect()->back();
            Post::create($data);
            return redirect('lifespot/my-xpirix');
        }
    }
}
