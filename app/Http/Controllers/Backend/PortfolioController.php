<?php

namespace App\Http\Controllers\Backend;

use App\Portfolio;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio =Portfolio::all();
        return view('backend.portfolio.show',compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catagories = Category::orderBy('id', 'DESC')->get();
        return view('backend.portfolio.create',compact('catagories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $portfolio=new Portfolio();
        $portfolio->header=$request->header;
        $portfolio->link=$request->link;
        $portfolio->cate_id=$request->cate_id;

        if ($request->hasFile('file')){
            $name = time().".".$request->file("file")->extension();
            $portfolio->image = $name;

            $request->file("file")->move(public_path().'/images/', $name);
        }

        $portfolio->save();
        return redirect(route('portfolio.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $portfolios=Portfolio::findorfail($portfolio);
        $portfolio->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $catagories = Category::orderBy('id', 'DESC')->get();
        $portfolios=Portfolio::findorfail($portfolio);
        $s=$portfolio;
        return view('backend.portfolio.edit',compact('s','catagories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolios =Portfolio::findorfail($portfolio);
        $portfolio->header = $request->header;
        $portfolio->link = $request->link;
//        $portfolio->cate_id = $request->cate_id;
        if ($request->hasFile('file')){
            $name = time().".".$request->file("file")->extension();
            $portfolio->image = $name;

            $request->file("file")->move(public_path().'/images/', $name);
        }

        $portfolio->save();
        return redirect(route('portfolio.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\portfolios  $portfolios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolios)
    {
        //
    }
}
