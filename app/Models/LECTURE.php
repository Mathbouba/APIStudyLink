<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LECTURE
 * 
 * @property int $ID_ANNONCE
 * @property int $ID_LIVRE
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property LIVRE $l_i_v_r_e
 *
 * @package App\Models
 */
class LECTURE extends Model
{
	protected $table = 'LECTURE';
	protected $primaryKey = 'ID_ANNONCE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ANNONCE' => 'int',
		'ID_LIVRE' => 'int'
	];

	protected $fillable = [
		'ID_LIVRE'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function l_i_v_r_e()
	{
		return $this->belongsTo(LIVRE::class, 'ID_LIVRE');
	}
}
