<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['blog_post_id', 'name', 'comment'];

    public function blogPost()
    {
        return $this->belongsTo(BlogPost::class);
    }
}
