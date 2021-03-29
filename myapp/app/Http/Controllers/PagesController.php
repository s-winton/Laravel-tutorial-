<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class PagesController extends Controller
{
    function home(Todo $post){
        return view('pages.home', ['post' => $post]);
    }

    function about(Todo $post){
        return view('pages.about', ['post' => $post]);
    }
}

