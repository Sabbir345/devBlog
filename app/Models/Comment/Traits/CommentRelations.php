<?php

namespace App\Models\Comment\Traits;

use App\User;
use App\Models\Post\Post;

trait CommentRelations
{
	public function post()
    {
    	return $this->belongsTo(Post::class, 'comment_id', 'id');
    }
    public function user()
    {
    	return $this->belongsTo(User::class, 'comment_id', 'id');
    }
}