<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Role extends \Eloquent {

	use SoftDeletingTrait;

	/**
	 * The timestamp when an item is deleted
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function users()
	{
		return $this->hasMany('User');
	}

}