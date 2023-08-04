<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ManagePostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // return view('posts.show', compact('post'));
    }


    public function edit(Post $manage_post)
    {
        $post = $manage_post;
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $manage_post)
    {
        $post = $manage_post;
        $data = request()->validate([
            'category_id' => 'required',
            'title' => 'required|max:120',
            // 'slug' => 'required',
            // 'thumbnail' => 'file|max:3000',
            'thumbnail' => 'file|max:5000|mimes:jpeg,png,jpg,webp,',
            'excerpt' => 'max:200',
            'body' => 'max:10000',
            'isPublic' => 'required',
            'isPublished' => 'required',
        ]);
        $data['slug'] = $data['title'];
        $data['user_id'] =auth()->id();

        $oldimage = $request->oldimage;
        $image = $request->thumbnail;
            if($image){
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(800, 600, function ($constraint) {
                    $constraint->upsize();
                })
                ->orientate()
                ->save('thumbnails/'.$image_one);
                // Image::make($image)->fit(500,300)->orientate()->save('thumbnails/'.$image_one);
                $data['thumbnail'] = 'thumbnails/'.$image_one;

        $post->update($data);
        if($oldimage) {
            unlink($oldimage);
        }

        return redirect()->route('manage-posts.index')->with('success','Post Updated');
        } else {
            $data['thumbnail'] = $oldimage;

            $post->update($data);
            return redirect()->route('manage-posts.index')->with('success','Post Updated');

        }
    }

    public function destroy(Request $request,Post $manage_post)
    {
        $post = $manage_post;

        $oldimage = $request->oldimage;
        // unlink($post->thumbnail);
        if($oldimage) {
            unlink($oldimage);
        }

        $manage_post->delete();
        return redirect()->route('manage-posts.index')->with('success','Post Deleted');
    }
}
