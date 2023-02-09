<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona
 * 
 * @property int $id
 * @property int|null $documento
 * @property int|null $tipo_documento
 * @property int|null $clase
 * @property string|null $nombre
 * @property Carbon|null $fecha_nac
 * @property int|null $nro_circuito
 * @property string|null $letra_circuito
 * @property string|null $direccion
 * @property int|null $dpto
 * @property string|null $profesion
 * @property int|null $sexo
 * @property string|null $obs
 * @property int|null $cod_alta_pad
 * @property int|null $cod_ope_pad
 * @property int|null $ur_ope_pad
 * @property string|null $secc_ope_pad
 * @property Carbon|null $fecha_cga_pad
 * @property string|null $hora_cga_pad
 * @property int|null $cod_alta_dif
 * @property Carbon|null $fecha_dif
 * @property int|null $oficina_dif
 * @property int|null $cod_ope_dif
 * @property int|null $ur_ope_dif
 * @property string|null $secc_ope_dif
 * @property Carbon|null $fecha_cga_dif
 * @property string|null $hora_cga_dif
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *  @property Carbon|null $deleted_at
 * 
 * @property TipoDoc|null $tipo_doc
 *
 * @package App\Models
 */
class Persona extends Model
{
	use SoftDeletes;
	protected $table = 'persona';

	protected $casts = [
		'documento' => 'int',
		'tipo_documento' => 'int',
		'clase' => 'int',
		'nro_circuito' => 'int',
		'dpto' => 'int',
		'sexo' => 'int',
		'cod_alta_pad' => 'int',
		'cod_ope_pad' => 'int',
		'ur_ope_pad' => 'int',
		'cod_alta_dif' => 'int',
		'oficina_dif' => 'int',
		'cod_ope_dif' => 'int',
		'ur_ope_dif' => 'int'
	];

	protected $dates = [
		'fecha_nac',
		'fecha_cga_pad',
		'fecha_dif',
		'fecha_cga_dif'
	];

	protected $fillable = [
		'documento',
		'tipo_documento',
		'clase',
		'nombre',
		'fecha_nac',
		'nro_circuito',
		'letra_circuito',
		'direccion',
		'dpto',
		'profesion',
		'sexo',
		'obs',
		'cod_alta_pad',
		'cod_ope_pad',
		'ur_ope_pad',
		'secc_ope_pad',
		'fecha_cga_pad',
		'hora_cga_pad',
		'cod_alta_dif',
		'fecha_dif',
		'oficina_dif',
		'cod_ope_dif',
		'ur_ope_dif',
		'secc_ope_dif',
		'fecha_cga_dif',
		'hora_cga_dif',
		'created_at',
		'updated_at',

	];

	public function tipo_doc()
	{
		return $this->belongsTo(TipoDoc::class, 'tipo_documento');
	}
}
