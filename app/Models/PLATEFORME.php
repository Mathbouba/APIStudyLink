<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PLATEFORME
 * 
 * @property int $ID_PLATEFORME
 * @property string|null $NOM_PLATEFORME
 * 
 * @property Collection|AUDIOVISUEL[] $a_u_d_i_o_v_i_s_u_e_l_s
 *
 * @package App\Models
 */
class PLATEFORME extends Model
{
	protected $table = 'PLATEFORME';
	protected $primaryKey = 'ID_PLATEFORME';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PLATEFORME' => 'int'
	];

	protected $fillable = [
		'NOM_PLATEFORME'
	];

	public function a_u_d_i_o_v_i_s_u_e_l_s()
	{
		return $this->hasMany(AUDIOVISUEL::class, 'ID_PLATEFORME');
	}
}
