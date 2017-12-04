<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class Pagecontroller extends Controller
{
    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
    	//dd($posts);
    	return view('web.posts', compact('posts'));
    }
}
