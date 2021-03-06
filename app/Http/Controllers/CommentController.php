<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
 
class CommentsController extends Controller
{
    /**
     * バリデーション、登録データの整形など
     */
    public function store(CommentRequest $request, Comment $comment)
    {

        // 二重送信対策
        $request->session()->regenerateToken();

        $user = auth()->user();
        $comment->fill($request->validated() + ['ip_address' => $request->ip()]);
        $comment->user_id = $user->id;
        $comment->save();
        session()->flash('msg_success', 'コメントを投稿しました');
 
        return back();
    }
}