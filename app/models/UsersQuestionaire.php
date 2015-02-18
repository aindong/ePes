<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UsersQuestionaire extends \Eloquent {

	use SoftDeletingTrait;

	/**
	 * The timestamp when an item is deleted
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	protected $table = 'usersquestionaires';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}