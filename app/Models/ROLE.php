<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ROLE
 * 
 * @property int $ID_ROLE
 * @property string|null $NOM_ROLE
 * 
 * @property Collection|UTILISATEUR[] $u_t_i_l_i_s_a_t_e_u_r_s
 *
 * @package App\Models
 */
class ROLE extends Model
{
	protected $table = 'ROLE';
	protected $primaryKey = 'ID_ROLE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ROLE' => 'int'
	];

	protected $fillable = [
		'NOM_ROLE'
	];

	public function u_t_i_l_i_s_a_t_e_u_r_s()
	{
		return $this->hasMany(UTILISATEUR::class, 'ID_ROLE');
	}
}
