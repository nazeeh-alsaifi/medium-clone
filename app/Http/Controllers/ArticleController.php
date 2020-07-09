<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ArticleController extends Controller
{
    public function create()
    {
        $tags = Tag::all();

        return view('article.create', ['Tags' => $tags]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

        if (array_key_exists('image', $data)) {
            $image = $data['image'];
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
//            $fullpath = 'images/'. $imageName;
            $file = $request->file('image');
            $file2 = $file->move(public_path('images'), $imageName);
            Image::make($file2)->resize(1200, 1200)->save();

            $article = Article::create([
                'image' => $imageName,
                'title' => $data['title'],
                'description' => $data['description'],
                'content' => $data['content']
            ]);
        } else {
            $article = Article::create([
                'title' => $data['title'],
                'description' => $data['description'],
                'content' => $data['content']
            ]);
        }

        $article->tags()->sync($request->tag, false);


        return redirect()->route('admin');
    }

    public function show($article_id)
    {

        $articleInfo = Article::findOrFail($article_id);

        return view('article.show', compact('articleInfo'));

    }

    public function edit($article_id)
    {
        $articleInfo = Article::find($article_id);
        $tags = Tag::all();

        return view('article.edit', ['articleInfo' => $articleInfo, 'Tags' => $tags])->with('leads', json_encode($articleInfo->tags()->allRelatedIds(), true));

    }

    public function update($article_id, Request $request)
    {

//        dd($request->all());
        $data = $request->validate([
            'image' => 'image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

        $article = Article::findOrFail($article_id);
        if (array_key_exists('image', $data)) {
            $image = $data['image'];
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $file = $request->file('image');
            $file2 = $file->move(public_path('images'), $imageName);
            Image::make($file2)->resize(1200, 1200)->save();
            $article->image = $imageName;
        }
        $article->title = $data["title"];
        $article->description = $data["description"];
        $article->content = $data["content"];

        $article->save();

        $article->tags()->sync($request->tag, true);

        return redirect()->route("admin");

    }

    public function delete($article_id)
    {

        Article::find($article_id)->delete();

        return redirect()->route('admin');

    }


}
