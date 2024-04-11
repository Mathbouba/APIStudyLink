<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AUTEUR
 * 
 * @property int $ID_AUTEUR
 * @property string $PRENOM_AUTEUR
 * @property string $NOM_AUTEUR
 * 
 * @property Collection|AUDIOVISUEL[] $a_u_d_i_o_v_i_s_u_e_l_s
 * @property Collection|LIVRE[] $l_i_v_r_e_s
 *
 * @package App\Models
 */
class AUTEUR extends Model
{
	protected $table = 'AUTEUR';
	protected $primaryKey = 'ID_AUTEUR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_AUTEUR' => 'int'
	];

	protected $fillable = [
		'PRENOM_AUTEUR',
		'NOM_AUTEUR'
	];

	public function a_u_d_i_o_v_i_s_u_e_l_s()
	{
		return $this->hasMany(AUDIOVISUEL::class, 'ID_AUTEUR');
	}

	public function l_i_v_r_e_s()
	{
		return $this->hasMany(LIVRE::class, 'ID_AUTEUR');
	}
}
