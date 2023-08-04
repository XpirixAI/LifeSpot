<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\XpirixContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $posts = Post::latest()->get();
        // $post = Post::with(['category'])->latest()->get();
        // return view('xpirix', compact('posts'));
        // $posts = Post::with(['category'])->latest()->get();
        // return view('xpirix',[
        //     'posts' => Post::latest()->filter(request(['search','category','author']))->get(),

        //     'categories' => Category::all(),

        //     'currentCategory' => Category::firstWhere('slug', request('category'))
        // ]);
        // $category = Category::all();
        // return view('xpirix', compact('category'), [
        //     'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
        // ]);
        // return view('xpirix', [
        //     'posts' => Post::latest()->filter(
        //                 request(['search', 'category', 'author'])
        //             )->paginate(18)->withQueryString()
        // ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            // 'title' => 'required|max:120|unique:posts',
            'title' => 'required|max:120',
            'category_id' => 'required',
            'excerpt' => 'max:200',
            // 'slug' => '',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
            // 'thumbnail' => 'required|file|max:3000',
            // 'excerpt' => 'required',
            'body' => 'max:1000',
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
            return redirect('/');
        } else {
            // return redirect()->back();
            Post::create($data);
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $contents = XpirixContent::find(1);
        return view('posts.show',compact('post','contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function edit(Post $post)
    // {
    //     $categories = Category::all();

    //     return view('admin.posts.edit', compact('post','categories'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Post $post)
    // {
    //     {
    //         $data = request()->validate([
    //             'title' => 'required|max:60',
    //             'category_id' => 'required',
    //             'excerpt' => 'required',
    //             'thumbnail' => 'required|file|max:5000',
    //             'body' => 'required',
    //             'isPublished' => 'required',
    //             'isPublic' => 'required',
    //         ]);

    //         $data['slug'] = $data['title'];
    //         $data['user_id'] =auth()->id();

    //         $image = $request->thumbnail;
    //             if($image){
    //                 $image_one = uniqid().'.'.$image->getClientOriginalExtension();
    //                 Image::make($image)->resize(400,300, function($const) {
    //                     $const->aspectRatio();
    //                 })
    //                 ->save('thumbnails/'.$image_one);
    //                 $data['thumbnail'] = 'thumbnails/'.$image_one;

    //             $post->update($data);
    //             return redirect('/');
    //         } else {
    //             // return redirect()->back();

    //             return redirect('/');
    //         }
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Post $post)
    // {
    //     $post->delete();
    //     return redirect()->route('manage-posts.index')->with('success','Post Deleted');
    // }
}
