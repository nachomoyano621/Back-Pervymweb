<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TelescopeEntriesTag
 * 
 * @property string|null $entry_uuid
 * @property string|null $tag
 *
 * @package App\Models
 */
class TelescopeEntriesTag extends Model
{
	protected $table = 'telescope_entries_tags';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'entry_uuid',
		'tag'
	];
}
