<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class DashboardUser
 * 
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $email
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $api_token
 * @property int $company_id
 * @property string $last_page
 * @property string $permission
 * @property string $real_name
 * @property bool $is_male
 * @property int $level_id
 * @property string $avatar
 * @property string $property_id_list
 * @property string $phone
 * @property string $address
 * @property int $creator_id
 * @property int $status_id
 * @property string $remark
 * @property int $age
 *
 * @package App\Models
 */
class DashboardUser extends Authenticatable
{
	use Notifiable;
	
	protected $casts = [
		'company_id' => 'int',
		'is_male' => 'bool',
		'level_id' => 'int',
		'creator_id' => 'int',
		'status_id' => 'int',
		'age' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token',
	];

	protected $fillable = [
		'name',
		'password',
		'email',
		'remember_token',
		'api_token',
		'company_id',
		'last_page',
		'permission',
		'real_name',
		'is_male',
		'level_id',
		'avatar',
		'property_id_list',
		'phone',
		'address',
		'creator_id',
		'status_id',
		'remark',
		'age'
	];
}
