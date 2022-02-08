<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RemoveImgController extends Controller
{
    public function removeimg($path,$postId){
    	$post = Post::find($postId);

        if(auth()->user()->id !== $post->user_id){
            return redirect('/home')->with('error','unauthorise page');
        }

		$imagess=$post->cover_image;  
		//$images=preg_replace("/$path/", " ", $images);

		$spacepathspace=" ".$path." ";
		$pathspace=$path." ";
		$spacepath=" ".$path;
		//if(preg_match("/$spacepathspace/", $images)){
		if(preg_match("/\\s+$spacepathspace+\\s/", $imagess)){
			$images=preg_replace("/$path/", " ", $imagess);
		}elseif (preg_match("/$pathspace/", $imagess)) {
			$images=preg_replace("/$path/", "", $imagess);
		}elseif (preg_match("/$spacepath/", $imagess)) {
			$images=preg_replace("/$path/", " ", $imagess);
		};


        //$images=trim($images);

        if(preg_match("/\\s{2,}/",$images)){
        	$images=preg_replace("/\\s{2,}/"," ", $images);
        };

        $post->cover_image=trim($images);
        $post->save();

        //REMOVING THE IMAGE FROM FILEMANAGER
        $post_imagepath=public_path().'\storage\cover_images\\'.$path;
        unlink($post_imagepath);

        return redirect('/posts/'.$post->id.'/edit')->with('success','image removed');
        //http://sirjames.com/posts/56/edit

		/*if(preg_match("/$path/",$images)){

			preg_replace(pattern, replacement, subject)
			$true="true";
		}else{
			$true="false";
		}  	*/
		//echo $images;
    }
}
