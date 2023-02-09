<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Localidad
 * 
 * @property int $id
 * @property int|null $nro_circuito
 * @property string|null $letra_circuito
 * @property string|null $nom_circuito
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Localidad extends Model
{
	protected $table = 'localidad';

	protected $casts = [
		'nro_circuito' => 'int'
	];

	protected $fillable = [
		'nro_circuito',
		'letra_circuito',
		'nom_circuito'
	];
}
