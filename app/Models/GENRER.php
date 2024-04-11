<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GENRER
 * 
 * @property int $ID_GENRE
 * @property int $ID_ANNONCE
 * 
 * @property AUDIOVISUEL $a_u_d_i_o_v_i_s_u_e_l
 * @property GENRE $g_e_n_r_e
 *
 * @package App\Models
 */
class GENRER extends Model
{
	protected $table = 'GENRER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_GENRE' => 'int',
		'ID_ANNONCE' => 'int'
	];

	public function a_u_d_i_o_v_i_s_u_e_l()
	{
		return $this->belongsTo(AUDIOVISUEL::class, 'ID_ANNONCE');
	}

	public function g_e_n_r_e()
	{
		return $this->belongsTo(GENRE::class, 'ID_GENRE');
	}
}
