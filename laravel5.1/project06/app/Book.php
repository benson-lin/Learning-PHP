<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $table='book';
	public $timestamps = false;

	//查出这本书谁借了
	public function borrowUser()
	{
		return $this->belongsTo('App\User','user_id','id');
	}

	public function bookCategories()
	{
		// return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id');
		return $this->belongsToMany('App\Category','book_category','book_id','category_id')
			->withPivot('id');
	}
}
