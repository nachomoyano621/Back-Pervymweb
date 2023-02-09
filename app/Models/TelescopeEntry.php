<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelescopeEntry
 * 
 * @property int|null $sequence
 * @property string|null $uuid
 * @property string|null $batch_id
 * @property string|null $family_hash
 * @property bool|null $should_display_on_index
 * @property string|null $type
 * @property string|null $content
 * @property string|null $created_at
 *
 * @package App\Models
 */
class TelescopeEntry extends Model
{
	protected $table = 'telescope_entries';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sequence' => 'int',
		'should_display_on_index' => 'bool'
	];

	protected $fillable = [
		'sequence',
		'uuid',
		'batch_id',
		'family_hash',
		'should_display_on_index',
		'type',
		'content'
	];
}
