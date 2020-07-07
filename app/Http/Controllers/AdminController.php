<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $articles= Article::all();
        $tags = Tag::all();

        return view("admin", ['Articles' => $articles, 'Tags' => $tags]);

    }

}
