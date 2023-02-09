<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notum
 * 
 * @property int $id
 * @property string $nota
 * @property int $paciente_id
 * @property int $profesional_id
 * 
 * @property Paciente $paciente
 * @property Profesional $profesional
 *
 * @package App\Models
 */
class Notum extends Model
{
	protected $table = 'nota';
	public $timestamps = false;

	protected $casts = [
		'paciente_id' => 'int',
		'profesional_id' => 'int'
	];

	protected $fillable = [
		'nota',
		'paciente_id',
		'profesional_id'
	];

	public function paciente()
	{
		return $this->belongsTo(Paciente::class);
	}

	public function profesional()
	{
		return $this->belongsTo(Profesional::class);
	}
}
