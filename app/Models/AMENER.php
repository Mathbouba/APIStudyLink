<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AMENER
 * 
 * @property int $ID_ANNONCE
 * @property int $ID_USER
 * 
 * @property COVOITURAGE $c_o_v_o_i_t_u_r_a_g_e
 * @property UTILISATEUR $u_t_i_l_i_s_a_t_e_u_r
 *
 * @package App\Models
 */
class AMENER extends Model
{
	protected $table = 'AMENER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ANNONCE' => 'int',
		'ID_USER' => 'int'
	];

	public function c_o_v_o_i_t_u_r_a_g_e()
	{
		return $this->belongsTo(COVOITURAGE::class, 'ID_ANNONCE');
	}

	public function u_t_i_l_i_s_a_t_e_u_r()
	{
		return $this->belongsTo(UTILISATEUR::class, 'ID_USER');
	}
}
