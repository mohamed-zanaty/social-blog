<?php

namespace App\Http\Controllers;

use App\Category;
use App\FeedBack;
use App\Http\Requests\PageControllerRequest;
use App\Like;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function indexpost(Request $request ,$user_id){
            //VALIDATE

            $img_name = time(). '.' .$request->url ->getClientOriginalExtension(); //for image name


             $post = new Post;
             $post->title = $request->title;
             $post->description = $request->description;
             $post->url =  $img_name;
             $post->category_id = $request->category_id;
             $post->user_id = $user_id;
             $post->save();
             $post->tags()->sync($request->tags,  false);

            $request->url->move(public_path('image'), $img_name); //for save image
            return redirect()->back()->with('success', 'Your Post Has Been Stored');

    }//// store post////////
    ///
    ///
    public function contactstore(Request $request){
        FeedBack::create([
           'name' => $request->name,
           'evaluation' => $request->evaluation,
           'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your FeedBack Has Been Sent');
    }///save feedback

    public function like(Request $request){
        $like_s = $request->like_s;
        $post_id = $request->post_id;
        $change_like = 0;

        $like = Like::where('post_id', $post_id)
            ->where('user_id', Auth::user()->id)
            ->first();
        if (!$like)
        {
            $new_like = new Like;
            $new_like->post_id = $post_id;
            $new_like->user_id =  Auth::user()->id;
            $new_like->like = 1;
            $new_like->save();
            $is_like = 1;
        }

        elseif ($like->like == 1)
        {
            $like = Like::where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->delete();
            $is_like = 0;
        }
        elseif ($like->like == 0)
        {
            $like = Like::where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->update(['like' => 1]);
            $is_like = 1;
            $change_like = 1;
        }

        $res = [
          'is_like' => $is_like,
          'change_like' => $change_like,
        ];
        return response()->json($res , 200);

    }///like ajax
    ///
    ///
     public function dislike(Request $request){
        $like_s = $request->like_s;
        $post_id = $request->post_id;
         $change_dislike = 0;
        $dislike = Like::where('post_id', $post_id)
            ->where('user_id', Auth::user()->id)
            ->first();
        if (!$dislike)
        {
            $new_dislike = new Like;
            $new_dislike->post_id = $post_id;
            $new_dislike->user_id =  Auth::user()->id;
            $new_dislike->like = 0;
            $new_dislike->save();
            $is_dislike = 1;
        }

        elseif ($dislike->like == 0)
        {
             Like::where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->delete();
            $is_dislike = 0;
        }
        elseif ($dislike->like == 1)
        {
             Like::where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->update(['like' => 0]);
            $is_dislike = 1;
            $change_dislike= 1;
        }

        $res = [

            'is_dislike' => $is_dislike,
            'change_dislike' => $change_dislike,
        ];
        return response()->json($res , 200);

    }///dislike ajax

    /////////////////////////edite and delete post//////
    public function deletepost($id){
        Post::find($id)->delete();

        return redirect('home/blog')->with('success', 'The Post Has been Deleted');

    }
    public function deletepost2($id){
        Post::find($id)->delete();
        return redirect('home/blog')->with('success', 'The Post Has been Deleted');

    }
    public function editview($id){
        $post = Post::find($id);
        $tags = Tag::all();
        $cats = Category::all();
        return view('main.update',compact('post', 'tags', 'cats'));

    }

    public function editpost(Request $request , $id){



        $post = Post::find($id);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        if ($request->hasFile('url'))
        {
            $file = $request->file('url');
            $extension = $file->getClientOriginalExtension();
            $file_name = time(). '.' . $extension;
            $file->move(public_path('image'), $file_name);
            $post->url = $file_name;

        }
        $post->tags()->sync($request->tags);
        $post->save();

        return redirect()->route('home.blog')->with('success', 'the post has been updated');

    }



}
