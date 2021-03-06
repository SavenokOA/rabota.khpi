<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= Post::orderBy('created_at','desc')->get();
        return view('admin.post.index',['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title=$request->input('title');
        $post->text=$request->input('text');
        $post->short_desc=$request->input('short_desc');
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('image/news'), $imageName);
        $imagePath='/image/news/'.$imageName;
        $post->img =$imagePath;
        $post->save();
        return back()->with(['success'=>'Новость была успешно добавлена!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title=$request->input('title');
        $post->text=$request->input('text');
        $post->short_desc=$request->input('short_desc');
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('image/news'), $imageName);
        $imagePath='/image/news/'.$imageName;
        $post->img =$imagePath;
        $post->save();
        return back()->with(['success'=>'Ярмарка была успешно обновлена!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Статья была успешно удалена!');
    }
}
