<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
                                                // POST DETAILS
    
    public function details(){

        // $posts = post::all();
        $posts = Post::with('user')->get();
        // $blogs = blog::orderBy('user_name','desc')->get(); //this is to order the blogs.
        //$blogs = blog::where('user_name','user2')->get(); // got get the ones containing user2 as a suer_name.
        // $posts = post::latest()->get();
        return view('blogs.details', ['posts' => $posts]);
    }

    public function index(){
        return view('blogs.index');
    }





                                            //  UASER INTERACTIONS
    public function profile(){
        $posts = post::all();
        $uId = Auth::id();
        return view('user.profile', ['uId' => $uId , 'posts' => $posts]);
    }

    public function create(){
        $user = Auth::user();
        $uId = $user->id;
        $uName = $user->name;
        return view('user.create',['uId' => $uId, 'uName' => $uName]);
    }
    public function delete(){
        return view('user.delete');
    }
    
    public function store(){

        $post = new post();         //making an instance of the model blog which is the table for the blogs
                                    //blog (is tabloe instance) saving in the field of title
                                    //as we get title submitted fromt the form called by request('name_in_the_form')
        $uId = Auth::id();
        $post->user_id = $uId;
        $post->title =  request('title');
        $post->content = request('content');

        // error_log($uId);

        $post->save();
        // return redirect()->route('/profile')->with('success', 'Post created successfully!');
        return redirect('/profile');
    }


    // public function loginx(){
    //     return view('loginx');
    // }
}
