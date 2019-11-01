<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Team;
use App\User;
use App\Comment;

class CommentsController extends Controller
{

    public function store(CommentRequest $request, $teamId)
    {   
        $team = Team::findOrFail($teamId);
        
        $user = Auth::user();
        
        $comment = new Comment();

        $comment->team_id = $team->id; 
        $comment->user_id = $user->id;
        $comment->content = request('content');
        
        $comment->save();

        return redirect()->route('teams.show',['id' => $teamId ]);
    }
  
}