<?php 
	
namespace App\Repositories;

use App\Models\Comment\Comment;
use App\Http\Requests\CommentRequest;

Class CommentRepository {

	private $model = null;
	private $request = null;

	public function __construct(Comment $post,CommentRequest  $request)
	{
		$this->model = $comment;
		$this->request = $request;
	}

	public function save()
	{
		$this->request->rules()
	}
}