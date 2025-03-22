<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',  // Make sure this matches the actual column name
        'name',
        'comment',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}