<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
       // dd(request()->all());

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

        Article::create($data);
        return view("home");
    }

}
