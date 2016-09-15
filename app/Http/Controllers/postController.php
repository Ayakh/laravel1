<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests;
use App\Post;

class postController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPost($id)
    {
        $post = Post::where('id',$id)->get();

        $comments = Comment::where('post_id','=',$id)->get();

        return view('post',compact('post','comments'));
    }

}
