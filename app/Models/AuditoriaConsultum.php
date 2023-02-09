<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuditoriaConsultum
 * 
 * @property int $id
 * @property string|null $parametro
 * @property int|null $id_padron
 * @property string|null $ip
 * @property Carbon|null $fecha_hora
 * @property int|null $id_usr
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class AuditoriaConsultum extends Model
{
	protected $table = 'auditoria_consulta';
	public $timestamps = false;

	protected $casts = [
		'id_padron' => 'int',
		'id_usr' => 'int'
	];

	protected $dates = [
		'fecha_hora'
	];

	protected $fillable = [
		'parametro',
		'id_padron',
		'ip',
		'fecha_hora',
		'id_usr'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_usr');
	}
}
