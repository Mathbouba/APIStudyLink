<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GENRE
 * 
 * @property int $ID_GENRE
 * @property string $NOM_GENRE
 * 
 * @property Collection|ECRITURE[] $e_c_r_i_t_u_r_e_s
 * @property Collection|GENRER[] $g_e_n_r_e_r_s
 *
 * @package App\Models
 */
class GENRE extends Model
{
	protected $table = 'GENRE';
	protected $primaryKey = 'ID_GENRE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_GENRE' => 'int'
	];

	protected $fillable = [
		'NOM_GENRE'
	];

	public function e_c_r_i_t_u_r_e_s()
	{
		return $this->hasMany(ECRITURE::class, 'ID_GENRE');
	}

	public function g_e_n_r_e_r_s()
	{
		return $this->hasMany(GENRER::class, 'ID_GENRE');
	}
}
