<?php

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	/**
	 * The timestamp when an item is deleted
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Guard the id
	 *
	 * @var array
	 */
	protected $guarded = ['id'];

	/**
	 * The rules on data
	 *
	 * @var array
	 */
	public static $rules = [
        'employee_no'   => 'unique:users,employee_no'
    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($pass)
	{
		$this->attributes['password'] = Hash::make($pass);
	}

	public function role()
	{
		return $this->belongsTo('Role', 'role_id');
	}

	public function department()
	{
		return $this->belongsTo('Department', 'department_id');
	}

    public function bio()
    {
        return $this->hasOne('UsersBio', 'employee_no', 'employee_no');
    }

    public function accomplishments()
    {
        return $this->hasMany('UsersAccomplishment', 'employee_no');
    }

    public function pes()
    {
        return $this->hasMany('Pes', 'employee_no', 'employee_no');
    }

    public function auditTrail()
    {
        return $this->hasMany('AuditTrail');
    }

    public function skills()
    {
        return $this->hasMany('UsersHobby', 'employee_no', 'employee_no');
    }

    public function evaluatorPes()
    {
        return $this->hasMany('Pes', 'user_id');
    }

}
