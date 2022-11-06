<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ricepe;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;
class CommentController extends Controller
{
    public function index()
    {  
            $ricepes = Ricepe::all();
            $comments = Comment::all();
            
            return view('ricepes.show')->with(['ricepes'=> $ricepes, 'comments' => $comments]);
    }

    public function create()
    {
        // return view('comments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);

        $comment = new Comment;
        $comment->text = $request->text;
        $comment->ricepe_id = $request->ricepe_id;
        $comment->user_id = $request->user()->id;
        $comment->save();

        return redirect()->back()
            ->with('success', 'Comment created successfully!');
    }

    public function destroy(Comment $comment)
    {
        $comment = Comment::find($comment->id);
        $comment->delete();
       return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}


