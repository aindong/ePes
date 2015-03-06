<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UsersHobby extends \Eloquent {

	use SoftDeletingTrait;

	/**
	 * The timestamp when an item is deleted
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	protected $table = 'usershobbies';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('User', 'employee_no');
    }

}