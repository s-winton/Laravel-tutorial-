<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class PagesController extends Controller
{
    function index(Todo $post){
        return view('pages.index', ['post' => $post]);
    }

    function about(Todo $post){
        return view('pages.about', ['post' => $post]);
    }
}

