<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function __construct(){
        
         $this->middleware('auth');
         
    }
    public function index()
    {
        $post = Post::all();
        return view('home')->withPosts($post);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, array(
                'title'         => 'required|max:255',
                'body'          => 'required'
            ));

        $post = new Post();

        $post->title    = $request->title;
        $post->body     = $request->description;
        $post->user_id  = auth()->user()->id;
        
        $post->save();

        return redirect(route('home'))->with('message', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('blog.single')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->title    = $request->title;
        $post->body     = $request->description;
        $post->user_id  = auth()->user()->id;
        
        $post->save();

        return redirect(route('home'))->with('message', 'Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect(route('home'))->with('message', ' Successfully Delete');
    }
}
