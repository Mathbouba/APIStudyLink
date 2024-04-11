<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LOISIR
 * 
 * @property int $ID_LOISIR
 * @property string|null $NOM_LOISIR
 * 
 * @property EVENTLOISIR $e_v_e_n_t_l_o_i_s_i_r
 *
 * @package App\Models
 */
class LOISIR extends Model
{
	protected $table = 'LOISIR';
	protected $primaryKey = 'ID_LOISIR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_LOISIR' => 'int'
	];

	protected $fillable = [
		'NOM_LOISIR'
	];

	public function e_v_e_n_t_l_o_i_s_i_r()
	{
		return $this->hasOne(EVENTLOISIR::class, 'ID_LOISIR');
	}
}
