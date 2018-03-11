<?php

namespace App\Models\Post\Traits;

use App\User;
use App\Models\Comment\Comment;

trait PostRelations
{

	public function comments()
    {
    	return $this->hasMany(Comment::class, 'post_id', 'id');
    }
	public function user()
	{
		return $this->belongsTo(User::class, 'post_id', 'id');
	}

}