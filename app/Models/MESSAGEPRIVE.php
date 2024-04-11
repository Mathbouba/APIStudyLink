<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MESSAGEPRIVE
 * 
 * @property int $ID_MESSAGE
 * @property int $ID_USER
 * @property int $ID_USER_ENVOYER
 * @property string|null $CONTENU
 * 
 * @property UTILISATEUR $u_t_i_l_i_s_a_t_e_u_r
 *
 * @package App\Models
 */
class MESSAGEPRIVE extends Model
{
	protected $table = 'MESSAGE_PRIVE';
	protected $primaryKey = 'ID_MESSAGE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_MESSAGE' => 'int',
		'ID_USER' => 'int',
		'ID_USER_ENVOYER' => 'int'
	];

	protected $fillable = [
		'ID_USER',
		'ID_USER_ENVOYER',
		'CONTENU'
	];

	public function u_t_i_l_i_s_a_t_e_u_r()
	{
		return $this->belongsTo(UTILISATEUR::class, 'ID_USER_ENVOYER');
	}
}
