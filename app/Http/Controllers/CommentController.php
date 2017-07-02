<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Thread;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function addThreadComment(Request $request, Thread $thread)
    {
        $this->validate($request,[
            'body'=>'required'

        ]);

        $comment=new Comment();
        $comment->body=$request->body;
        $comment->user_id=auth()->user()->id;

        $thread->comments()->save($comment);

        return back()->withMessage('Gerageerd!');
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
