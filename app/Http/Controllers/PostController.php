<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
       //reteieve from data base
       $allPosts=Post::all();
       
        return view('posts.index',['posts'=>$allPosts]);
    }


    public function show($postId){
        $singlePost=Post::find($postId);
       // $singlePost=Post::where('id',$postId)->first();
       // $singlePost=Post::where('id',$postId)->get();
        //$singlePost=['id' => '1','title'=>'php','discription'=>'this is a description','posted_by'=>'sara','created_at'=>'8/10/2024'];
        return view('posts.show',['Post'=> $singlePost]);

    }

    public function create(){
        $users=User::all();
        return view('posts.create',['users'=>$users]);
    }

    public function store(){
        
        $title=request()->title;
        $discription=request()->discribtion;
        $creator=request()->user;

        $post=new Post();
        $post->title=$title;
        $post->discribtion=$discription;
        
        $post->save(); 
         //store $data;
        return to_route('posts.index');
    }

    public function edit(Post $post){
        $users=User::all();
        return view('posts.edit',['users'=>$users,'post'=>$post]);
    }


    public function update($postid){
        
        
        $title=request()->title;
        $discription=request()->discribtion;
        $creator=request()->user;

        $post=Post::find($postid);
        $post->update([
            'title'=>$title,
            'discribtion'=>$discription
        ]);

        //dd($title,$discription,$creator);
        return to_route('posts.show',$postid);
    }

    public function distroy($postId){
        //select
        $post=Post::find($postId);
        //delete in data base
        $post->delete();
         
        return to_route('posts.index');
    }
    //
}
