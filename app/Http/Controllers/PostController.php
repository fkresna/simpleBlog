<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('index','show');
    }

	public function index() {
		$posts = Post::orderBy('created_at','desc')->get();

		return view('welcome',compact('posts'));
	}

	public function show($id) {

        $post = Post::find($id);
		return view('posts.show',compact('post'));
	}

    public function showUser($user_id) {

        $posts = Post::where('user_id',$user_id)->get();
        $user = User::find($user_id);

        $data = array(
            'user' => $user,
            'posts' => $posts
        );

        return view('posts.showUser',$data);
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
        $post->user_id = auth()->id();
    	$post->save();

    	return redirect('/');
    }
}
