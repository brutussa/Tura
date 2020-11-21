<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Postscontroller extends Controller
{
    public function index(){
        $posts=Post::all();

        return view('posts')->with('posts', $posts);
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view('post')->with('post',$post);
    }
    public function create(){
        return view('create');
    }

    public function save(Request $request){
        $post=new Post($request->all());
        $post->save();
        return redirect()->back();
    }

    public function edit($postid){
        $post=Post::findOrFail($postid);
        return view('edit')->with('post',$post);
    }
    public function update(Request $request, $postid){
        $post=Post::findOrFail($postid);
        $post->update($request->all());
        return redirect()->back();
    }
    public function delete($id){
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect()->back();
    }
    public function user_page(){
        $my_posts=Post::all();
        return view('user.my_posts')->with('my_posts',$my_posts);
    }

}
