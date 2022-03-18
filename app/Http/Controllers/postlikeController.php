<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postlikeController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function store(post $post ,Request $request){

        if ($post->liked($request->user())) {
            return response(null,409);
        }

        $post->likes()->create(['user_id'=>$request->user()->id,]);

        return back();
    }

    public function destroy(post $post ,Request $request){

        $request->user()->likes()->where('post_id',$post->id)->delete();

        return back();

    }
}
