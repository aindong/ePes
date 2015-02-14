<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UsersVoluntaryWork extends \Eloquent {

	use SoftDeletingTrait;

	protected $table = 'usersvoluntaryworks';

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