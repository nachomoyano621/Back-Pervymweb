<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profesional
 * 
 * @property int $id
 * @property string $nota
 * @property string $apellido
 *@property int $paciente_id
 * @property int $profesional_id
 * 
 * @property Paciente $paciente
 * @property Profesional $profesional
 * @property Collection|Notum[] $nota
 *
 * @package App\Models
 */
class Nota extends Model
{
	use SoftDeletes;
	protected $table = 'nota';
	public $timestamps = true;

	protected $casts = [
		'profesional_id' => 'int',
		'paciente_id' => 'int'
	];

	protected $fillable = [
		'nota',
		'profesional_id',
		'paciente_id',
		'created_at',
		'updated_at',
		'deleted_at' 
	
	];

	public function profesional()
	{
		return $this->belongsTo(Profesional::class);
	}
	public function paciente()
	{
		return $this->belongsTo(Paciente::class);
	}

	
}
