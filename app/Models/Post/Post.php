<?php

namespace App\Models\Post;

use App\Models\Post\Traits\PostRelations;
use App\Models\Post\Traits\PostScopes;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use PostRelations,PostScopes;
}
