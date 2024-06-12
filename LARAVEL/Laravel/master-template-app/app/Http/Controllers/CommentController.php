<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        Comment::create($request->all());

        return back()->with('success', 'Comment submitted successfully.');
    }
}
