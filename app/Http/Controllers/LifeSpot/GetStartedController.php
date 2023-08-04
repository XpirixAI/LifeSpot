<?php

namespace App\Http\Controllers\LifeSpot;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\XpirixContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GetStartedController extends Controller
{
    public function index()
    {
        // $posts = Post::latest()->get();
        // return view('lifespot.getting_started.index',compact('posts'));

        $posts = Post::latest()->paginate(10);

        $contents = XpirixContent::find(1);
        $categories = Category::all();
        if(Auth::check()) {
            return view('lifespot.getting_started.index', compact('contents','categories'),[
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

                return view('lifespot.getting_started.index', compact('contents','categories'),[
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

    public function getStartedGuide()
    {
        $contents = XpirixContent::find(1); //includes footer
        return view('lifespot.getting_started.starting_guide',compact('contents'));
    }

}
