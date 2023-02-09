<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dium
 * 
 * @property int $id
 * @property string $nombre
 * 
 * @property DiaPaciente $dia_paciente
 *
 * @package App\Models
 */
class Dium extends Model
{
	protected $table = 'dia';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function dia_paciente()
	{
		return $this->hasOne(DiaPaciente::class, 'dia_id');
	}
}
