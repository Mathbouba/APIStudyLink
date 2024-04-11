<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UTILISATEUR
 * 
 * @property int $ID_USER
 * @property int|null $ID_CLASSE
 * @property int $ID_ROLE
 * @property string $NOM
 * @property string $PRENOM
 * @property string $email
 * @property string|null $mdp
 * @property Carbon|null $DATE_NAISSANCE
 * @property int|null $ARGENT
 * @property string|null $PP
 * @property int|null $NOTE
 * @property int|null $ARCHIVE
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CLASSE|null $c_l_a_s_s_e
 * @property ROLE $r_o_l_e
 * @property Collection|AMENER[] $a_m_e_n_e_r_s
 * @property Collection|ANNONCE[] $a_n_n_o_n_c_e_s
 * @property Collection|COMMENTAIRE[] $c_o_m_m_e_n_t_a_i_r_e_s
 * @property Collection|DEMANDER[] $d_e_m_a_n_d_e_r_s
 * @property Collection|MESSAGEPRIVE[] $m_e_s_s_a_g_e_p_r_i_v_e_s
 * @property Collection|PARTICIPE[] $p_a_r_t_i_c_i_p_e_s
 * @property Collection|POSSEDER[] $p_o_s_s_e_d_e_r_s
 * @property Collection|TRANSACTION[] $t_r_a_n_s_a_c_t_i_o_n_s
 *
 * @package App\Models
 */
class UTILISATEUR extends Model
{
	protected $table = 'UTILISATEUR';
	protected $primaryKey = 'ID_USER';

	protected $casts = [
		'ID_CLASSE' => 'int',
		'ID_ROLE' => 'int',
		'DATE_NAISSANCE' => 'datetime',
		'ARGENT' => 'int',
		'NOTE' => 'int',
		'ARCHIVE' => 'int',
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'remember_token'
	];

	protected $fillable = [
		'ID_CLASSE',
		'ID_ROLE',
		'NOM',
		'PRENOM',
		'email',
		'mdp',
		'DATE_NAISSANCE',
		'ARGENT',
		'PP',
		'NOTE',
		'ARCHIVE',
		'email_verified_at',
		'remember_token'
	];

	public function c_l_a_s_s_e()
	{
		return $this->belongsTo(CLASSE::class, 'ID_CLASSE');
	}

	public function r_o_l_e()
	{
		return $this->belongsTo(ROLE::class, 'ID_ROLE');
	}

	public function a_m_e_n_e_r_s()
	{
		return $this->hasMany(AMENER::class, 'ID_USER');
	}

	public function a_n_n_o_n_c_e_s()
	{
		return $this->hasMany(ANNONCE::class, 'ID_USER');
	}

	public function c_o_m_m_e_n_t_a_i_r_e_s()
	{
		return $this->hasMany(COMMENTAIRE::class, 'ID_USER');
	}

	public function d_e_m_a_n_d_e_r_s()
	{
		return $this->hasMany(DEMANDER::class, 'ID_USER');
	}

	public function m_e_s_s_a_g_e_p_r_i_v_e_s()
	{
		return $this->hasMany(MESSAGEPRIVE::class, 'ID_USER_ENVOYER');
	}

	public function p_a_r_t_i_c_i_p_e_s()
	{
		return $this->hasMany(PARTICIPE::class, 'ID_USER');
	}

	public function p_o_s_s_e_d_e_r_s()
	{
		return $this->hasMany(POSSEDER::class, 'ID_USER');
	}

	public function t_r_a_n_s_a_c_t_i_o_n_s()
	{
		return $this->hasMany(TRANSACTION::class, 'ID_USER_ACHETER');
	}
}
