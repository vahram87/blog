<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Category;
use App\Model\user\Category_post;


class HomeController extends Controller
{
    public function index(){
    	$posts = post::where('status',1)->orderBy('created_at', 'desc')->paginate(3);
    	return view('user.home',compact('posts'));
    }

    public function category(category $category){
    	$posts = $category->posts();
      return view('user.home',compact('posts'));
      //return $category->posts;
    }

   public function grak(){
   	 $posts = post::where('status',1)->orderBy('created_at', 'desc')->paginate(3);
   	 return view('user.grak',compact('posts'));
   }
    public function arvest(){
   	 $posts = post::where('status',1)->orderBy('created_at', 'desc')->paginate(3);
   	 return view('user.arvest',compact('posts'));
   }
     public function qnnadatutyun(){
   	 $posts = post::where('status',1)->orderBy('created_at', 'desc')->paginate(3);
   	 return view('user.qnnadatutyun',compact('posts'));
   }
   public function mardik(){
   	 $posts = post::where('status',1)->orderBy('created_at', 'desc')->paginate(3);
   	 return view('user.mardik',compact('posts'));
   }


}

