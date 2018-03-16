<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
	public function index() {
		$posts = Post::all();

		return view('welcome',compact('posts'));
	}

	public function show() {
		return view('posts.show');
	}

    public function create() {
    	return view('posts.create');
    }

    public function store() {

    	$this->validate(request(), [
    		'title' => 'required',
    		'content' => 'required'
    	]);

    	$post = new Post;
    	$post->title = request('title');
    	$post->content = request('content');
    	$post->save();

    	return redirect('/');
    }
}
