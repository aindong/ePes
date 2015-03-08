<?php

class Pes extends \Eloquent {
	protected $guarded = ['id'];

    protected $table = 'pes';

    public function user()
    {
        return $this->belongsTo('User', 'employee_no', 'employee_no');
    }

    public function evaluator()
    {
        return $this->belongsTo('User', 'user_id');
    }
}