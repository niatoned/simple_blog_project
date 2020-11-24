<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title', 'slug', 'content'];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function getContentAttribute($value)
    {
        return $value;
    }
}
