<?php

namespace App\Http\Controllers;


use MetaTag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Section description
        MetaTag::set('title', 'You are at home');
        MetaTag::set('description', 'This is my home. Enjoy!');

        return view('index');
    }

    public function detail()
    {
        // Section description
        MetaTag::set('title', 'This is a detail page');
        MetaTag::set('description', 'All about this detail page');
        MetaTag::set('image', asset('images/favicon.ico"'));

        return view('detail');
    }

    public function private()
    {
        // Section description
        MetaTag::set('title', 'Private Area');
        MetaTag::set('description', 'You shall not pass!');
        MetaTag::set('image', asset('images/favicon.ico"'));

        return view('private');
    }
}
