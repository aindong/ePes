<?php

class Position extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
        'name'  => 'unique:positions'
	];

	// Don't forget to fill this array
	protected $guarded = ['id'];

}