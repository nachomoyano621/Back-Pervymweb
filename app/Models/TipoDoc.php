<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoDoc
 * 
 * @property int $id
 * @property string|null $nombre_tipodoc
 * 
 * @property Collection|Persona[] $personas
 *
 * @package App\Models
 */
class TipoDoc extends Model
{
	protected $table = 'tipo_doc';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'nombre_tipodoc'
	];

	public function personas()
	{
		return $this->hasMany(Persona::class, 'tipo_documento');
	}
}
