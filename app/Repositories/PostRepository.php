<?php 
	
namespace App\Repositories;

use App\Models\Post\Post;
use App\Http\Requests\PostRequest;

Class PostRepository {

	private $model = null;
	private $request = null;

	public function __construct(Post $post, PostRequest $request)
	{
		$this->model = $post;
		$this->request = $request;
	}

	public function save()
	{
		$this->request->rules()
	}
}