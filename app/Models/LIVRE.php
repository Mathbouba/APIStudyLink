<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LIVRE
 * 
 * @property int $ID_LIVRE
 * @property int $ID_AUTEUR
 * @property string $NOM_LIVRE
 * 
 * @property AUTEUR $a_u_t_e_u_r
 * @property Collection|DEMANDER[] $d_e_m_a_n_d_e_r_s
 * @property Collection|ECRITURE[] $e_c_r_i_t_u_r_e_s
 * @property Collection|LECTURE[] $l_e_c_t_u_r_e_s
 * @property Collection|POSSEDER[] $p_o_s_s_e_d_e_r_s
 *
 * @package App\Models
 */
class LIVRE extends Model
{
	protected $table = 'LIVRE';
	protected $primaryKey = 'ID_LIVRE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_LIVRE' => 'int',
		'ID_AUTEUR' => 'int'
	];

	protected $fillable = [
		'ID_AUTEUR',
		'NOM_LIVRE'
	];

	public function a_u_t_e_u_r()
	{
		return $this->belongsTo(AUTEUR::class, 'ID_AUTEUR');
	}

	public function d_e_m_a_n_d_e_r_s()
	{
		return $this->hasMany(DEMANDER::class, 'ID_LIVRE');
	}

	public function e_c_r_i_t_u_r_e_s()
	{
		return $this->hasMany(ECRITURE::class, 'ID_LIVRE');
	}

	public function l_e_c_t_u_r_e_s()
	{
		return $this->hasMany(LECTURE::class, 'ID_LIVRE');
	}

	public function p_o_s_s_e_d_e_r_s()
	{
		return $this->hasMany(POSSEDER::class, 'ID_LIVRE');
	}
}
