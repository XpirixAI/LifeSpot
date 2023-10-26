<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\XpirixContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;

class XpirixLandingPageController extends Controller
{
    use WithPagination;

    // public function temp_coming_soon()
    // {
    //     return view('coming_soon');
    // }

    // public function temp_dev_pass(Request $request)
    // {   
    //     Log::info('DEV: temp_dev_pass fired');
    //     if ($request->password == '127lifespot127!'){
    //         $posts = Post::latest()->paginate(10);
    //         // $post_count = Post::withCount(['isPublished'])->get();
    //         $contents = XpirixContent::find(1);
    //         $categories = Category::all();
    //         if(Auth::check()) {
    //             return view('xpirix', compact('contents','categories'),[
    //                 'posts' => Post::where('isPublic','public')
    //                     ->where('isPublished','Published')
    //                     ->orWhere('user_id', auth()->user()->id)->where('isPublic','private')->where('isPublished','Published')
    //                     // ->latest()
    //                     ->orderBy('updated_at','desc')
    //                     ->orderBy('user_id','desc')->filter(request(['author','category','search']))
    //                     // ->paginate(10)
    //                     // ->withQueryString(),
    //                     ->get(),
    //             ]);
    //             } else {
    //                 return view('xpirix', compact('contents','categories'),[
    //                     'posts' => Post::where('isPublic','public')
    //                         ->where('isPublished','Published')
    //                         // ->orWhere('user_id', auth()->user()->id)->where('isPublic','private')
    //                         // ->latest()
    //                         ->orderBy('updated_at','desc')
    //                         ->filter(request(['author', 'category','search']))
    //                         // ->paginate(10)
    //                         // ->withQueryString(),
    //                         ->get(),
    //                 ]);
    //         }
    //     } else {
    //         Log::info(['DEV: password', $request->password]);
    //         return redirect()->back();
    //     }
        
    // }

    public function index()
    {   
        $posts = Post::latest()->paginate(10);
        // $post_count = Post::withCount(['isPublished'])->get();
        $contents = XpirixContent::find(1);
        $categories = Category::all();
        if(Auth::check()) {
            return view('xpirix', compact('contents','categories'),[
                'posts' => Post::where('isPublic','public')
                    ->where('isPublished','Published')
                    ->orWhere('user_id', auth()->user()->id)->where('isPublic','private')->where('isPublished','Published')
                    // ->latest()
                    ->orderBy('updated_at','desc')
                    ->orderBy('user_id','desc')->filter(
                        request(['author','category','search']))
                            // ->paginate(10)
                            // ->withQueryString(),
                            ->get(),
            ]);
        } else {
            return view('xpirix', compact('contents','categories'),[
                'posts' => Post::where('isPublic','public')
                    ->where('isPublished','Published')
                    // ->orWhere('user_id', auth()->user()->id)->where('isPublic','private')

                    // ->latest()
                    ->orderBy('updated_at','desc')
                    ->filter(
                        request(['author', 'category','search']))
                            // ->paginate(10)
                            // ->withQueryString(),
                            ->get(),
            ]);
    }

    }

    // public function index()
    // {
    //     $posts = Post::latest()->paginate(10);
    //     $contents = XpirixContent::find(1);
    //     $categories = Category::all();
    //     return view('xpirix', [
    //         'posts' => Post::latest()->filter(
    //                     request(['search', 'category', 'author'])
    //                 )->paginate(18)->withQueryString()
    //     ]);

    // }
    public function show(Post $post)
    {
        $contents = XpirixContent::find(1);
        return view('posts.show',compact('post','contents'));
    }
}
