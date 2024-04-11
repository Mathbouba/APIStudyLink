<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EVENTLOISIR
 * 
 * @property int $ID_LOISIR
 * @property int $ID_ANNONCE
 * @property string|null $TYPE_LOISIR
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property LOISIR $l_o_i_s_i_r
 *
 * @package App\Models
 */
class EVENTLOISIR extends Model
{
	protected $table = 'EVENT_LOISIR';
	protected $primaryKey = 'ID_LOISIR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_LOISIR' => 'int',
		'ID_ANNONCE' => 'int'
	];

	protected $fillable = [
		'ID_ANNONCE',
		'TYPE_LOISIR'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function l_o_i_s_i_r()
	{
		return $this->belongsTo(LOISIR::class, 'ID_LOISIR');
	}
}
