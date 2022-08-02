<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));\

        return view('posts', [
            "title" => "All Posts",
            "active" => 'Blog',
            // "posts" => Post::all()
            // agar postingan terbaru yg di atas
            // with() = untuk mengurangi jumlah query agar ringan
            // "posts" => Post::with(['author', 'category'])->latest()->get()
            // paginate() gunanya untuk pagination
            "posts" => Post::latest()->filter(request(['search', 'category','author']))->paginate(7)->withQueryString()
        ]);
    }

    // show gunanya untuk detail
    public function show(Post $post)
    {
        return view('post', [

            "title" => "Single",
            "active" => 'Blog',
            // find artinya cari
            "post" => $post

        ]);
    }
}
