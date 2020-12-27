<?php

namespace App\Http\Controllers;

use App\Category;
use App\FeedBack;
use App\Http\Requests\ProfileRequest;
use App\Post;
use App\Setting;
use App\Tag;
use App\User;
use Auth;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function page()
    {
        return view('main.page');
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $stops = Setting::where('name', 'create')->get();
        return view('main.create', compact('categories', 'tags', 'stops'));
    }

    public function contact()
    {

        return view('main.contact');
    }

    public function home()
    {

        $posts = Post::all();

        return view('main.content', compact('posts'));
    }

    public function homepost($id)
    {
        $post = Post::find($id);
        $stops = Setting::where('name', 'like')->get();

        return view('main.post', compact('post', 'stops'));
    }

    public function panel()
    {

        $user = User::where('id', Auth::id())->first();
        return view('main.starter', compact('user'));
    }

    public function updateprofile(ProfileRequest $request, $id)
    {


        $person = User::where('id', $id)->first();
        $photo = $person->url;

        $person->name = $request->name;
        $person->password = bcrypt($request->password);
        if ($request->hasFile('url')) {
            $file = $request->file('url');
            $extension = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extension;
            $file->move(public_path('image'), $file_name);
            $person->url = $file_name;

        } else {
            $person->url = $photo;
        }
        $person->save();
        return redirect()->back()->with('update', 'your data was updated');
    }

    public function allpost()
    {
        $posts = Post::paginate(10);

        return view('main.allpost', compact('posts'));
    }

    public function adminpost($id)
    {

        $post = Post::find($id);
        $stops = Setting::where('name', 'like')->get();
        return view('main.post', compact('post', 'stops'));
    }

    public function editview($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        $cats = Category::all();
        return view('main.update', compact('post', 'tags', 'cats'));

    }

    public function delete($id)
    {
        Post::find($id)->delete();

        return redirect()->back();

    }

    public function category()
    {

        $categories = Category::all();
        return view('main.categorypost', compact('categories'));

    }

    public function categorypost($id)
    {

        $posts = Post::where('category_id', $id)->get();

        if ($posts->count() == 0) {
            abort('404');
        }
        return view('main.postofcategory', compact('posts'));

    }

    public function categoryadd()
    {

        $cat = new Category;
        $cat->name = \request('name');
        $cat->save();
        return redirect()->back()->with('add', 'You category was added');

    }

    public function users()
    {

        $users = User::paginate(10);
        return view('main.users', compact('users'));

    }

    public function usersdelete($id)
    {

        User::find($id)->delete();
        return redirect()->back();

    }

    public function feeds()
    {

        $feedsback = FeedBack::paginate(10);
        return view('main.feedback', compact('feedsback'));

    }

    public function feedsdelete($id)
    {

        FeedBack::find($id)->delete();
        return redirect()->back();

    }

}
