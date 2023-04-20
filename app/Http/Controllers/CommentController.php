<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'content' => 'required|min:10',
            'post_id' => 'required',
            'author' => ''
        ]);

        if (!request()->author) {
            $attributes['author'] = 'Anonymous';
        }

        Comment::create($attributes);

        return back()->with('success_message', 'Comment posted !');
    }
}
