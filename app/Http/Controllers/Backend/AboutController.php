<?php

namespace App\Http\Controllers\Backend;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about =About::all();
        return view('backend.about.show',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abouts = About::create([
            'header' => $request->header,
            'link' => $request->link,
            'content'  => $request->content,
        ]);
        $about =About::all();
        return view('backend.about.show',compact('about'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $abouts=About::findorfail($about);
        $about->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $abouts=About::findorfail($about);
        $s=$about;
        return view('backend.about.edit',compact('s'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $abouts =About::findorfail($about);
        $about->update($request->only('header','content','link'));
        $about =About::all();
        return redirect(route('about.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
