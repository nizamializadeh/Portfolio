<?php

namespace App\Http\Controllers\Backend;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news =News::all();
        return view('backend.news.show',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $news=new News();
        $news->header=$request->header;
        $news->content=$request->content;
        $news->link=$request->link;
        $news->time=$request->time;
        if ($request->hasFile('file')){
            $name = time().".".$request->file("file")->extension();
            $news->image = $name;

            $request->file("file")->move(public_path().'/images/', $name);
        }
        $news->save();




        return redirect(route('news.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        $newss=News::findorfail($news);
        $news->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $newss=News::findorfail($news);
        $s=$news;
        return view('backend.news.edit',compact('s'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $newss =news::findorfail($news);
        $news->header=$request->header;
        $news->content=$request->content;
        $news->link=$request->link;
        $news->time=$request->time;
        if ($request->hasFile('file')){
            $name = time().".".$request->file("file")->extension();
            $news->image = $name;

            $request->file("file")->move(public_path().'/images/', $name);
        }

        $news->save();
        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
