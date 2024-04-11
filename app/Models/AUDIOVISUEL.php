<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AUDIOVISUEL
 * 
 * @property int $ID_ANNONCE
 * @property int $ID_AUTEUR
 * @property int $ID_PLATEFORME
 * @property string|null $NOM_OEUVRE
 * @property int|null $FILM_SERIE
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property AUTEUR $a_u_t_e_u_r
 * @property PLATEFORME $p_l_a_t_e_f_o_r_m_e
 * @property Collection|GENRER[] $g_e_n_r_e_r_s
 *
 * @package App\Models
 */
class AUDIOVISUEL extends Model
{
	protected $table = 'AUDIOVISUEL';
	protected $primaryKey = 'ID_ANNONCE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ANNONCE' => 'int',
		'ID_AUTEUR' => 'int',
		'ID_PLATEFORME' => 'int',
		'FILM_SERIE' => 'int'
	];

	protected $fillable = [
		'ID_AUTEUR',
		'ID_PLATEFORME',
		'NOM_OEUVRE',
		'FILM_SERIE'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function a_u_t_e_u_r()
	{
		return $this->belongsTo(AUTEUR::class, 'ID_AUTEUR');
	}

	public function p_l_a_t_e_f_o_r_m_e()
	{
		return $this->belongsTo(PLATEFORME::class, 'ID_PLATEFORME');
	}

	public function g_e_n_r_e_r_s()
	{
		return $this->hasMany(GENRER::class, 'ID_ANNONCE');
	}
}
