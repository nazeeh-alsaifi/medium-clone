<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'content','image'];

    public function tags(){
        return $this->belongsToMany('App\Tag','article_tag');
    }
}
