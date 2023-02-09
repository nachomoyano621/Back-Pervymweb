<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Oficina
 * 
 * @property int $id
 * @property int|null $nro_oficina
 * @property string|null $nombre
 * @property string|null $localidad
 * @property string|null $suprimida
 * @property string|null $domicilio
 * @property string|null $telefono
 * @property int|null $zona
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Oficina extends Model
{
	protected $table = 'oficina';

	protected $casts = [
		'nro_oficina' => 'int',
		'zona' => 'int'
	];

	protected $fillable = [
		'nro_oficina',
		'nombre',
		'localidad',
		'suprimida',
		'domicilio',
		'telefono',
		'zona'
	];
}
