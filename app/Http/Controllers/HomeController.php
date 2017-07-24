<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $allPost = Post::where('batch' , $user->batch )->orderBy('date' , 'desc') ->get();
        $allClasses = Classes::all();
        $result = array_fill(0 , count($allPost) , null);
        $cnt= 0;
        foreach($allPost as $post){
            $size = 0;
            foreach($allClasses as $cls) if($cls->post_id == $post->post_id) $size++;
            $arr = array_fill(0 , $size , null);
            $c = 0;
            foreach($allClasses as $cls) if($cls->post_id == $post->post_id){
                $arr[$c++] = $cls;
            }
            $result[$cnt++] = $arr;
        }

//        $cnt = 1;
//        foreach($result as $res){
//            echo $cnt."<br>";
//            foreach($res as $cls){
//                echo $cls->course." ".$cls->type."<br>";
//            }
//            $cnt++;
//        }

        return view('home' , compact('result')) ;


//        $result = Classes::all();
//
//        return view('home' , compact('result')) ;
    }

}
