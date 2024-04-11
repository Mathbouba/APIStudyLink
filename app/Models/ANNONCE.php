<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ANNONCE
 *
 * @property int $ID_ANNONCE
 * @property int $ID_USER
 * @property string $NOM
 * @property string $LOCALISATION
 * @property string|null $DESCRIPTION
 * @property int|null $NB_PERSONNE
 * @property int|null $PRIX
 * @property Carbon|null $DATE_DEBUT_ANNONCE
 * @property Carbon|null $DATE_FIN_ANNONCE
 * @property int|null $ETAT
 * @property int|null $ARCHIVE
 * @property Carbon|null $DATE_PUBLICATION
 * @property Carbon|null $DATE_ETAT
 *
 * @property UTILISATEUR $u_t_i_l_i_s_a_t_e_u_r
 * @property AUDIOVISUEL $a_u_d_i_o_v_i_s_u_e_l
 * @property Collection|COMMENTAIRE[] $c_o_m_m_e_n_t_a_i_r_e_s
 * @property COVOITURAGE $c_o_v_o_i_t_u_r_a_g_e
 * @property Collection|ECHANGECOMPETENCE[] $e_c_h_a_n_g_e_c_o_m_p_e_t_e_n_c_e_s
 * @property Collection|EVENTLOISIR[] $e_v_e_n_t_l_o_i_s_i_r_s
 * @property Collection|EVENTSPORTIF[] $e_v_e_n_t_s_p_o_r_t_i_f_s
 * @property LECTURE $l_e_c_t_u_r_e
 * @property Collection|PARTICIPE[] $p_a_r_t_i_c_i_p_e_s
 * @property Collection|TRANSACTION[] $t_r_a_n_s_a_c_t_i_o_n_s
 *
 * @package App\Models
 */
class ANNONCE extends Model
{
	protected $table = 'ANNONCE';
	protected $primaryKey = 'ID_ANNONCE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ANNONCE' => 'int',
		'ID_USER' => 'int',
		'NB_PERSONNE' => 'int',
		'PRIX' => 'int',
		'DATE_DEBUT_ANNONCE' => 'datetime',
		'DATE_FIN_ANNONCE' => 'datetime',
		'ETAT' => 'int',
		'ARCHIVE' => 'int',
		'DATE_PUBLICATION' => 'datetime',
		'DATE_ETAT' => 'datetime',
        'Type' => 'int',
	];

	protected $fillable = [
		'ID_USER',
		'NOM',
		'LOCALISATION',
		'DESCRIPTION',
		'NB_PERSONNE',
		'PRIX',
		'DATE_DEBUT_ANNONCE',
		'DATE_FIN_ANNONCE',
		'ETAT',
		'ARCHIVE',
		'DATE_PUBLICATION',
		'DATE_ETAT',
        'Type',
    ];

	public function u_t_i_l_i_s_a_t_e_u_r()
	{
		return $this->belongsTo(UTILISATEUR::class, 'ID_USER');
	}

	public function a_u_d_i_o_v_i_s_u_e_l()
	{
		return $this->hasOne(AUDIOVISUEL::class, 'ID_ANNONCE');
	}

	public function c_o_m_m_e_n_t_a_i_r_e_s()
	{
		return $this->hasMany(COMMENTAIRE::class, 'ID_ANNONCE');
	}

	public function c_o_v_o_i_t_u_r_a_g_e()
	{
		return $this->hasOne(COVOITURAGE::class, 'ID_ANNONCE');
	}

	public function e_c_h_a_n_g_e_c_o_m_p_e_t_e_n_c_e_s()
	{
		return $this->hasMany(ECHANGECOMPETENCE::class, 'ID_ANNONCE');
	}

	public function e_v_e_n_t_l_o_i_s_i_r_s()
	{
		return $this->hasMany(EVENTLOISIR::class, 'ID_ANNONCE');
	}

	public function e_v_e_n_t_s_p_o_r_t_i_f_s()
	{
		return $this->hasMany(EVENTSPORTIF::class, 'ID_ANNONCE');
	}

	public function l_e_c_t_u_r_e()
	{
		return $this->hasOne(LECTURE::class, 'ID_ANNONCE');
	}

	public function p_a_r_t_i_c_i_p_e_s()
	{
		return $this->hasMany(PARTICIPE::class, 'ID_ANNONCE');
	}

	public function t_r_a_n_s_a_c_t_i_o_n_s()
	{
		return $this->hasMany(TRANSACTION::class, 'ID_ANNONCE');
	}
}
