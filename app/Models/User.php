<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $api_token
 * @property string $permission
 * @property string $avatar
 * @property string $remark
 * @property int $creator_id
 * @property int $status
 * @property \Carbon\Carbon $login_time
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable;

	protected $table = 'user';

	protected $casts = [
		'creator_id' => 'int',
		'status' => 'int'
	];

	protected $hidden = [
		'password',
	];

	protected $fillable = [
		'name',
		'password',
		'email',
		'phone',
		'api_token',
		'permission',
		'avatar',
		'remark',
		'creator_id',
		'status'
	];
}
