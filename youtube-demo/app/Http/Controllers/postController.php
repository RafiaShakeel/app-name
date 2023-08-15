<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postController extends Controller
{
    public function actuallyUpdatePost(Post $post,Request $request)
    {
        if(auth()->user()->id !==$post['user_id']){
            return redirect('/');
        }

        $incomingFeilds=$request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);

    $incomingFeilds['title']=strip_tags($incomingFeilds['title']);
    $incomingFeilds['body']=strip_tags($incomingFeilds['body']);

    $post->update($incomingFeilds);
    return redirect('/');
    }


    public function showEditScreen(Post $post)
    {
        if(auth()->user()->id!==$post['user_id']){
            return redirect('/');
        }
        return view('edit-post',['post'=>$post]);
    }


    public function createPost(Request $request){
        $incomingFeilds=$request->validate([
        'title'=>'required',
        'body'=>'required'
    ]);

    $incomingFeilds['title']=strip_tags($incomingFeilds['title']);
    $incomingFeilds['body']=strip_tags($incomingFeilds['body']);
    $incomingFeilds['user_id']=auth()->id();
    Post::create($incomingFeilds);
    return redirect('/');
    }


    public function softDelete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/'); // Redirect to the home page or any other desired page
    }

    
}
