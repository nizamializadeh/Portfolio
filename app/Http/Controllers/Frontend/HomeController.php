<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Social;
use App\About;
use App\Service;
use App\Category;
use App\Portfolio;
use App\News;

class HomeController extends Controller
{
    public function index()
    {
        $id=1;
        $user =User::findorfail($id);
        $social=Social::all();
        $about=About::all();
        $service=Service::all();
        $category=Category::all();
        $portfolio=Portfolio::all();
        $news=News::all();


        return view('welcome',compact('user','social','about','service','category','portfolio','news'));
    }
}
