<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ECHANGECOMPETENCE
 * 
 * @property int $ID_COMPETENCE
 * @property int $ID_ANNONCE
 * @property string|null $NOM_COMPETENCE
 * 
 * @property ANNONCE $a_n_n_o_n_c_e
 *
 * @package App\Models
 */
class ECHANGECOMPETENCE extends Model
{
	protected $table = 'ECHANGE_COMPETENCE';
	protected $primaryKey = 'ID_COMPETENCE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COMPETENCE' => 'int',
		'ID_ANNONCE' => 'int'
	];

	protected $fillable = [
		'ID_ANNONCE',
		'NOM_COMPETENCE'
	];

	public function a_n_n_o_n_c_e()
	{
		return $this->belongsTo(ANNONCE::class, 'ID_ANNONCE');
	}
}
