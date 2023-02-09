<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id_usuario
 * @property string|null $email
 * @property string|null $password
 * @property string|null $rol
 * @property int|null $estado
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|AuditoriaConsultum[] $auditoria_consulta
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'id_usuario';

	protected $casts = [
		'estado' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'email',
		'password',
		'rol',
		'estado'
	];

	public function auditoria_consulta()
	{
		return $this->hasMany(AuditoriaConsultum::class, 'id_usr');
	}
}
