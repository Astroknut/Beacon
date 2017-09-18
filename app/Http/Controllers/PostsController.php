<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //Require Auth middleware for all Post methods
    public function __construct()
    {
    	$this->middleware('auth');
    }

    //Query to return all posts sorted by post date and send to Posts.index layout
    public function index()
    {
    	$posts = Post::latest()->get();

    	return view('Posts.index', compact('posts'));
    }

    //Return single post by id when specified on route
    public function show(Post $post)
    {
    	return view('Posts.show', compact('post'));
    }


    //Redirects to view for user to create new post
    public function create()
    {
        return view('Posts.create');
    }


    //Validate form field input and run User publish method to store in DB
    public function store()
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	auth()->user()->publish(
    		new Post(request(['title', 'body']))
    	);

    	return redirect('/home');
    }
}
