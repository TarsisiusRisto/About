<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

 class Post extends Model{
    // protected $table = 'blog_posts';
    // protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'author', 'slug', 'body'];
}