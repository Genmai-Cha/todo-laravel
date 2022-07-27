<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function showCreatePage()
    {
        return view('posts.create');
    }
}
