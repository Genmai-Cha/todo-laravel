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

    /**
     * (post) バリデーションをする - Illuminate\Http\Requestのvalidateメソッドを使う
     */
    public function create(Request $request)
    {
        $request->validate([
            // バリデーションルールを入れる
            'title' => 'string | min: 5',
            'post_contents' => 'string|required '
        ]);
    }
}
