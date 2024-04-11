<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SPORT
 * 
 * @property int $ID_SPORT
 * @property string|null $NOM_SPORT
 * 
 * @property EVENTSPORTIF $e_v_e_n_t_s_p_o_r_t_i_f
 *
 * @package App\Models
 */
class SPORT extends Model
{
	protected $table = 'SPORTS';
	protected $primaryKey = 'ID_SPORT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SPORT' => 'int'
	];

	protected $fillable = [
		'NOM_SPORT'
	];

	public function e_v_e_n_t_s_p_o_r_t_i_f()
	{
		return $this->hasOne(EVENTSPORTIF::class, 'ID_SPORT');
	}
}
