<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CLASSE
 * 
 * @property int $ID_CLASSE
 * @property string|null $LIBELLE
 * 
 * @property Collection|UTILISATEUR[] $u_t_i_l_i_s_a_t_e_u_r_s
 *
 * @package App\Models
 */
class CLASSE extends Model
{
	protected $table = 'CLASSE';
	protected $primaryKey = 'ID_CLASSE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE'
	];

	public function u_t_i_l_i_s_a_t_e_u_r_s()
	{
		return $this->hasMany(UTILISATEUR::class, 'ID_CLASSE');
	}
}
