<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('blog/home', ['articles' => Articles::orderBy('id', 'desc')->limit(3)->get()]);
    }
}


