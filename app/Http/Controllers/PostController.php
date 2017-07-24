<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Post;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $classes = Classes::paginate(10) ;

        return view('home' , compact('classes')) ;

        $posts = Post::all() ;

//        $classes = Classes::all() ;
//        return view('home' , compact('classes')) ;

        foreach ( $posts as $post) {

            $post_id = $post->post_id ;

            $classes= Classes::where('post_id' , $post_id )->get() ;

//            return $classes ;

            return view('home' , compact('classes')) ;

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post-schedule');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $user = Auth::user();

        $data = $request->all();

        $condition = $data['course'] ;

        //first save the post , then use post id to classes table
        $post = new Post() ;

        $post->comment = $data['comment'];
        $post->date = $data['date'];
        $post->batch = $user->batch;
        $post->CRname = $user->name;

        $post->save();

        $last_post_id = $post->post_id;
        //update classes table
        foreach( $condition as $key => $condition ) {

            $classes = new Classes();

            $classes->course = $data['course'][$key];
            $classes->type = $data['type'][$key];
            $classes->start_time = $data['start_time'][$key];
            $classes->date = $data['date'];
            $classes->post_id = $last_post_id ;
            $classes->batch = $user->batch ;
            $classes->CRname = $user->name ;

            $classes->save();

        }


        return redirect('/home');
//        return "SUCCESS!";
//        return redirect('/post_schedule');

//        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        //
    }
    
//    public function home(){
//        $classes = Classes::all();
//
//        return view('home' , compact('classes')) ;
//    }

    public function search(Request $request){
        $result = Classes::where('course' , $request->course )
            ->orderBy('post_id' , 'desc')->get();
        
        return view('search' , compact('result'));

    }

    public function SearchDate( Request $request ) {
        $result = Classes::where('date' , $request->date )
            ->orderBy('post_id' , 'desc')->get();
        return view('search' , compact('result'));
    }
    
    public function SearchBatchPost( Request $request ) {
        
        $allPost = Post::where('batch' , $request->batch )->get();
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

        $batch = $request->batch ;

        return view('batch-post' , compact('result' , 'batch' )) ;
    }
    
    public function profile(){

        $user = Auth::user();

        return view('profile' , compact('user'));
    }

    public function PostSchedule(){
        $user = Auth::user();
        if( $user->isCR == 0 ) {
            return view('post-schedule-deny' , compact('user'));
        }
        
        return view('post-schedule');
    }
    
    public function contact(){
        
        $users = User::where('isCR' , 1)->get();
        
        return view('contact' , compact('users'));
        
    }

    public function logout(){
        return view('logout');
    }

    public function about(){
        return view('about-us');
    }
}
