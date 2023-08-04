<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        $private = $posts->where('isPublic','private');
        $public = $posts->where('isPublic','public');
        return view('admin.dashboard.index',compact('posts','private','public'));
    }
}
