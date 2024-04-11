<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PARTICIPE
 * 
 * @property int $ID_USER
 * @property int $ID_ANNONCE
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property UTILISATEUR $u_t_i_l_i_s_a_t_e_u_r
 *
 * @package App\Models
 */
class PARTICIPE extends Model
{
	protected $table = 'PARTICIPE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'ID_ANNONCE' => 'int'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function u_t_i_l_i_s_a_t_e_u_r()
	{
		return $this->belongsTo(UTILISATEUR::class, 'ID_USER');
	}
}
