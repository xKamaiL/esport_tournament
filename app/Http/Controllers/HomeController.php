<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index()
    {
        $newList = News::query()->get();
        return view('frontend.home.index', compact('newsList'));
    }
}
