<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class AuditTrail extends \Eloquent {

	use SoftDeletingTrait;

	protected $table = 'logs';

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
	protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }
}