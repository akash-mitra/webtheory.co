<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function root()
    {
        return view('public.root');
    }

    public function features()
    {
        return view('public.features');
    }

    public function blog()
    {
        return view('public.blog');
    }
}
