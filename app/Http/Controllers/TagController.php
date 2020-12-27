<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $tags = Tag::all();

        return view('main.tags', compact('tags'));
    }



    public function store(Request $request)
    {
        $tag = Tag::create([
            'name' =>$request->name,
        ]);
        return redirect()->back()->with('success', 'new tag was added');
    }


    public function show($id)
    {
        $tags = Tag::find($id);
        return view('main.postoftags', compact('tags'));
    }




    public function destroy($id)
    {
        //
    }
}
