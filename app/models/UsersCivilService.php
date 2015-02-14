<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UsersCivilService extends \Eloquent {

	use SoftDeletingTrait;

	protected $table = 'userscivilservices';

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

}