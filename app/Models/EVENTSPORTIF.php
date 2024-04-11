<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EVENTSPORTIF
 * 
 * @property int $ID_SPORT
 * @property int $ID_ANNONCE
 * @property string|null $TYPE_EVENT
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property SPORT $s_p_o_r_t
 *
 * @package App\Models
 */
class EVENTSPORTIF extends Model
{
	protected $table = 'EVENT_SPORTIF';
	protected $primaryKey = 'ID_SPORT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SPORT' => 'int',
		'ID_ANNONCE' => 'int'
	];

	protected $fillable = [
		'ID_ANNONCE',
		'TYPE_EVENT'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function s_p_o_r_t()
	{
		return $this->belongsTo(SPORT::class, 'ID_SPORT');
	}
}
