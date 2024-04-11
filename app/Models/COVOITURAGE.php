<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class COVOITURAGE
 * 
 * @property int $ID_ANNONCE
 * @property int $NB_VOYAGEURS
 * @property string $LOCALISATION_ARRIVEE
 * @property string|null $VOITURE
 * @property string $CONDUCTEUR
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 * @property Collection|AMENER[] $a_m_e_n_e_r_s
 *
 * @package App\Models
 */
class COVOITURAGE extends Model
{
	protected $table = 'COVOITURAGE';
	protected $primaryKey = 'ID_ANNONCE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_ANNONCE' => 'int',
		'NB_VOYAGEURS' => 'int'
	];

	protected $fillable = [
		'NB_VOYAGEURS',
		'LOCALISATION_ARRIVEE',
		'VOITURE',
		'CONDUCTEUR'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}

	public function a_m_e_n_e_r_s()
	{
		return $this->hasMany(AMENER::class, 'ID_ANNONCE');
	}
}
