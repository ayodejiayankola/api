<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        return Post::create($request->all());
    }
}
