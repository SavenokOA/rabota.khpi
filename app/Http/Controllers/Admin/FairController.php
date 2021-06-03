<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fair;
use Illuminate\Http\Request;

class FairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fair= Fair::orderBy('created_at','desc')->get();
        return view('admin.fair.index',['fair'=>$fair]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fair.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fair = new Fair();
        $fair->title=$request->input('title');
        $fair->text=$request->input('text');
        $fair->short_desc=$request->input('short_desc');
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('image/fairs'), $imageName);
        $imagePath='/image/fairs/'.$imageName;
        $fair->img =$imagePath;
        $fair->save();
        return back()->with(['success'=>'Ярмарка была успешно добавлена!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function show(Fair $fair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function edit(Fair $fair)
    {
        return view('admin.fair.edit',['fairs'=>$fair]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fair $fair)
    {
        $fair->title=$request->input('title');
        $fair->text=$request->input('text');
        $fair->short_desc=$request->input('short_desc');
        $imageName= time().'.'.$request->photo->extension();
        $request->photo->move(public_path('image/fairs'), $imageName);
        $imagePath='/image/fairs/'.$imageName;
        $fair->img =$imagePath;
        $fair->save();
        return back()->with(['success'=>'Ярмарка была успешно обновлена!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fair  $fair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fair $fair)
    {
        //
    }
}
