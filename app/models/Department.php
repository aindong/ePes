<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Department extends \Eloquent {

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
        'name'  => 'unique:departments'
	];

	// Don't forget to fill this array
	protected $guarded = ['id'];

	public function user()
	{
		return $this->hasMany('User');
	}

}