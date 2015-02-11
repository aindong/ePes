<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Celebration extends \Eloquent {

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
	protected $guarded = [];

	public function setStartAtAttribute($start_at)
	{
		$this->attributes['start_at'] = date('Y-m-d H:i:s', strtotime($start_at));
	}

}