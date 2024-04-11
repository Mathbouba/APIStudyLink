<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TRANSACTION
 * 
 * @property int $ID_TRANSACTION
 * @property int $ID_ANNONCE
 * @property int $ID_USER
 * @property int $ID_USER_ACHETER
 * @property int|null $MONTANT_TRANSACTION
 * @property Carbon|null $DATE_HEURE
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property UTILISATEUR $u_t_i_l_i_s_a_t_e_u_r
 *
 * @package App\Models
 */
class TRANSACTION extends Model
{
	protected $table = 'TRANSACTION';
	protected $primaryKey = 'ID_TRANSACTION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TRANSACTION' => 'int',
		'ID_ANNONCE' => 'int',
		'ID_USER' => 'int',
		'ID_USER_ACHETER' => 'int',
		'MONTANT_TRANSACTION' => 'int',
		'DATE_HEURE' => 'datetime'
	];

	protected $fillable = [
		'ID_ANNONCE',
		'ID_USER',
		'ID_USER_ACHETER',
		'MONTANT_TRANSACTION',
		'DATE_HEURE'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function u_t_i_l_i_s_a_t_e_u_r()
	{
		return $this->belongsTo(UTILISATEUR::class, 'ID_USER_ACHETER');
	}
}
