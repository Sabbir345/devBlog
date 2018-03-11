<?php

namespace App\Models\Comment;

use App\Models\Comment\Traits\CommentRelations;
use App\Models\Comment\Traits\CommentScopes;
use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
     use CommentRelations,CommentScopes;
}


