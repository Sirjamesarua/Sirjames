<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::all();
        return Redirect('/home');
        //return view('home')->with('posts',$posts);
        //return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'required',
            'project_link'=>'required'
        ]);


        if($request->hasFile('cover_image')){

            //TINKER
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id =auth()->user()->id;
            $post->project_link = $request->input('project_link');
                //ADDING HTTPS AUTOMATICATICALLY IF NOT ADDED
                if (!preg_match("/https/", $post->project_link)) {
                    $post->project_link ='https://'.$request->input('project_link');
                }

            $filepathArray=array();
            $cover_image=$request->file('cover_image');
            foreach ($cover_image as $cover_images) {
                    
                //get file name with extension
                $filenameWithExt=$cover_images->getClientOriginalName();

                //get just file name
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

                //get just ext
                $extension=$cover_images->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$filename.'_'.time().'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$cover_images->storeAs('public/cover_images',$fileNameToStore);

                  $filepathArray[]=$fileNameToStore;
            }
            $post->cover_image=implode(" ",$filepathArray);

            //DELETE IMAGE IF DATA IS MISSING IN DATABASE
            if(!isset($post->cover_image,$post->title,$post->body,$post->project_link)){
                foreach($filepathArray as $singlepath){
                    $post_imagepath=public_path().'\storage\cover_images\\'.$singlepath;
                    unlink($post_imagepath); 
                }
            } 

            $post->save();

        }

        //REDIRECTING
        return redirect('/home')->with('success','post created');

       // return 143;
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
        return Redirect('/home');
       // return view ('posts.show')->with('post',$post);
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
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'nullable',
            'project_link'=>'required'
        ]);

    


            //TINKER
            $post = Post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id =auth()->user()->id;
            $post->project_link = $request->input('project_link');
                //ADDING HTTPS AUTOMATICATICALLY IF NOT ADDED
                if (!preg_match("/https/", $post->project_link)) {
                    $post->project_link ='https://'.$request->input('project_link');
                }


        if($request->hasFile('cover_image')){

            $previousimages=explode(" ", $post->cover_image);

            $cover_image=$request->file('cover_image');
            foreach ($cover_image as $cover_images) {
                    
                //get file name with extension
                $filenameWithExt=$cover_images->getClientOriginalName();

                //get just file name
                $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);

                //get just ext
                $extension=$cover_images->getClientOriginalExtension();

                //filename to store in database
                $fileNameToStore=$filename.'_'.time().'.'.$extension;

                if(preg_match('/\s/', $fileNameToStore)){
                     $fileNameToStore= preg_replace('/\s/', 
                        '_',$fileNameToStore);
                }

                //upload image
                $path=$cover_images->storeAs('public/cover_images',$fileNameToStore);

                    //ADDING NEW IMAGES TO PREVIOUS IMAGES
                    $previousimages[]=$fileNameToStore;
            }

            $post->cover_image=implode(" ", $previousimages);

            //DELETE IMAGE IF DATA IS MISSING IN DATABASE
            if(!isset($post->cover_image,$post->title,$post->body,$post->project_link)){
                foreach($filepathArray as $singlepath){
                    $post_imagepath=public_path().'\storageR$\cover_images\\'.$singlepath;
                    unlink($post_imagepath); 
                }
            } 


        }
            $post->save();

        //REDIRECTING
        return redirect('/posts')->with('success','post updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);

        if(auth()->user()->id !== $post->user_id){
            return redirect('/home')->with('error','unauthorise page');
        }

                $filepathArray=explode(" ",$post->cover_image );
                foreach( $filepathArray as $singlefile){
                    $post_imagepath=public_path().'\storage\cover_images\\'.$singlefile;
                    //$post_imagepath=public_path().'\storage\cover_images\\'.$post->cover_image;
                    unlink($post_imagepath); 
                   //unlink('/storage/cover_images/p.jpg');
                  // Storage::delete('/storage/cover_images/'.$post->cover_image);
                }
        

        $post->delete();
        
        return redirect('/home')->with('success','post removed');
    }
}
