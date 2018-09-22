<?php

namespace App\Http\Controllers\Backend;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social = Social::all();
        return view('backend.social.show',compact('social'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.social.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
////        $social = Social::create([
////            'link' => $request->link,
////            'icon'  => $request->icon,
////        ]);
//        Social::create($request->all());

        $social = new Social();
        $social->link = $request->link;
        $social->icon = $request->icon;
        $social->save();

        return redirect(route('social.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(social $social)
    {
        $socials=Social::findorfail($social);
        $social->delete();
        return back();


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(social $social)
    {
        $socials=Social::findorfail($social);

        return view('backend.social.edit',compact('social'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {


        $socials =Social::findorfail($social);
//        $social->update($request->only('icon','link'));
//        $social =Social::all();
        $social->link = $request->link;
        $social->icon = $request->icon;

        $social->save();
        return redirect(route('social.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(social $social)
    {
        //
    }
}
