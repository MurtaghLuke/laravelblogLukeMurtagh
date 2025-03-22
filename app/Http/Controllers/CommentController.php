<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        Comment::create([
            'post_id' => $postId,
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Comment added!');
    }
}
