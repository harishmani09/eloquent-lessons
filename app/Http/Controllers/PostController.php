<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('id', '>=', 2)->get();
        return $posts;
        // return view('welcome');

    }
}
