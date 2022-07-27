<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * (get)フォームを表示
     * 
     * @return View
     */
    public function showCreatePage()
    {
        return view('posts.create');
    }
}
