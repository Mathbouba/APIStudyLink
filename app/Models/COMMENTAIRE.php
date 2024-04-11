<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class COMMENTAIRE
 * 
 * @property int $ID_COMMENTAIRE
 * @property int $ID_ANNONCE
 * @property int $ID_USER
 * @property string $CONTENU
 * @property Carbon|null $DATE_COMMENTAIRE
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property UTILISATEUR $u_t_i_l_i_s_a_t_e_u_r
 *
 * @package App\Models
 */
class COMMENTAIRE extends Model
{
	protected $table = 'COMMENTAIRE';
	protected $primaryKey = 'ID_COMMENTAIRE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMMENTAIRE' => 'int',
		'ID_ANNONCE' => 'int',
		'ID_USER' => 'int',
		'DATE_COMMENTAIRE' => 'datetime'
	];

	protected $fillable = [
		'ID_ANNONCE',
		'ID_USER',
		'CONTENU',
		'DATE_COMMENTAIRE'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function u_t_i_l_i_s_a_t_e_u_r()
	{
		return $this->belongsTo(UTILISATEUR::class, 'ID_USER');
	}
}
