<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class PostController extends Controller
{
    public function getDashboard(){
        $posts=Post::orderBy('created_at','desc')->get();
        //return $posts;
        return view('dashboard',['posts'=>$posts]);
    }
    public function createPost(Request $request)
    {
        $this->validate($request,[
            'body'=>'required|max:1000'
        ]);
        $post = new Post();
        $post->body = $request['body'];

        $message='there was an error';
        if($request->user()->posts()->save($post)){
            $message='post successfully created';
        }
        return redirect()->route('dashboard')->with(['message'=>$message]);
    }
    public function getDeletePost($post_id){
        $post=Post::where('id',$post_id)->first();
        if(Auth::User()!=$post->user){
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('dashboard')->with(['message'=>'Successfully Deleted']);
    }
    public function postEditPost(Request $request){
        $post=Post::find($request['postId']);
        $this->validate($request,[
            'body'=>'required'
        ]);
        if(Auth::User()!=$post->user){
            return redirect()->back();
        }

        $post->body=$request['body'];
        $post->update();

        return response()->JSON(['new_body'=>$post->body],200);
        //return redirect()->route('dashboard')->with(['message'=>'Successfully Edited']);
    }

    public function postLikePost(Request $request){
        $postId=$request['postId'];
        $is_like=$request['isLike'];

    }

}
