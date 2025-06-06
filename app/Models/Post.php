<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

 class Post extends Model{
    // protected $table = 'blog_posts';
    // protected $primaryKey = 'post_id';
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];
    protected $with = ['author', 'category']; // default eager loading


    public function author(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
