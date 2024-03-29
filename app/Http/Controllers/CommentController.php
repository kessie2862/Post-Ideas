<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    // The store method is responsible for storing a new comment in the database.
    public function store(Idea $idea)
    {
        // The request() function returns an instance of the current request.
        $comment = new Comment();

        // The idea_id attribute is set to the ID of the idea that the comment belongs to.
        $comment->idea_id = $idea->id;

        // The content attribute is set to the value of the content input field.
        $comment->content = request()->get('content');
        $comment->save();

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Comment added successfully!');
    }
}
