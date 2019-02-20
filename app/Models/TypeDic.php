<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 18 Feb 2019 09:27:33 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class TypeDic
 * 
 * @property int $id
 * @property string $model
 * @property string $name
 * @property \Carbon\Carbon $create_time
 * @property \Carbon\Carbon $update_time
 *
 * @package App\Models
 */
class TypeDic extends Eloquent
{
	protected $table = 'type_dic';
	public $timestamps = false;

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'model',
		'name',
		'create_time',
		'update_time'
	];
}
