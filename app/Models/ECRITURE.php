<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ECRITURE
 * 
 * @property int $ID_LIVRE
 * @property int $ID_GENRE
 * 
 * @property GENRE $g_e_n_r_e
 * @property LIVRE $l_i_v_r_e
 *
 * @package App\Models
 */
class ECRITURE extends Model
{
	protected $table = 'ECRITURE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_LIVRE' => 'int',
		'ID_GENRE' => 'int'
	];

	public function g_e_n_r_e()
	{
		return $this->belongsTo(GENRE::class, 'ID_GENRE');
	}

	public function l_i_v_r_e()
	{
		return $this->belongsTo(LIVRE::class, 'ID_LIVRE');
	}
}
