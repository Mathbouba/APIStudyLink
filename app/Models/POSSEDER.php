<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class POSSEDER
 * 
 * @property int $ID_USER
 * @property int $ID_LIVRE
 * 
 * @property LIVRE $l_i_v_r_e
 * @property UTILISATEUR $u_t_i_l_i_s_a_t_e_u_r
 *
 * @package App\Models
 */
class POSSEDER extends Model
{
	protected $table = 'POSSEDER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'ID_LIVRE' => 'int'
	];

	public function l_i_v_r_e()
	{
		return $this->belongsTo(LIVRE::class, 'ID_LIVRE');
	}

	public function u_t_i_l_i_s_a_t_e_u_r()
	{
		return $this->belongsTo(UTILISATEUR::class, 'ID_USER');
	}
}
