<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $blogPostId)
    {
        Comment::create([
            'blog_post_id' => $blogPostId,
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Comment added!');
    }
}
