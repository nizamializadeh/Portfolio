<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category =Category::all();
        return view('backend.category.show',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create([
            'name' => $request->name,
        ]);
        $category =Category::all();
        return view('backend.category.show',compact('category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categorys=Category::findorfail($category);
        $category->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categoris=Category::findorfail($category);

        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $categoris =Category::findorfail($category);
        $category->update($request->only('name'));
        $category =Category::all();

        return redirect(route('category.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categori  $categori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $categorys=Category::findorfail($category);
        $category->delete();
        return back();
    }
}
