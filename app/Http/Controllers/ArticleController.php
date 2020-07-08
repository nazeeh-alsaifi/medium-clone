<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'image' => 'image',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required']);

        if (array_key_exists('iamge',$data)) {
            $imageName=date('YmdHis') . "." . $image->getClientOriginalExtension();
//            $fullpath = 'images/'. $imageName;
            $file=$request->file('image');
            $file2=$file->move(public_path('images'),$imageName);
            Image::make($file2)->resize(1200,1200)->save();

            Article::create([
                'image' => $imageName,
                'title' => $data['title'],
                'description' => $data['description'],
                'content' => $data['content']
            ]);
        }
        Article::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content']
        ]);

        return redirect()->route('admin');
    }

    public function show($article_id){

        $articleInfo = Article::find($article_id);

        return view('article.show', compact('articleInfo'));

    }

    public function delete($article_id)
    {


        Article::find($article_id)->delete();

        return redirect()->route('admin');

    }


}
