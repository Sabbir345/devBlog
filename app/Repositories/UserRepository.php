<?php 
	
namespace App\Repositories;

use App\Models\User\User;

Class UserRepository {

	private $model = null;

	public function __construct(User $user)
	{
		$this->model = $user;
	}
}


