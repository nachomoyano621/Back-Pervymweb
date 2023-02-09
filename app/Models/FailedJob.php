<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FailedJob
 * 
 * @property string|null $id
 * @property string|null $uuid
 * @property string|null $connection
 * @property string|null $queue
 * @property string|null $payload
 * @property string|null $exception
 * @property string|null $failed_at
 *
 * @package App\Models
 */
class FailedJob extends Model
{
	protected $table = 'failed_jobs';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'id',
		'uuid',
		'connection',
		'queue',
		'payload',
		'exception',
		'failed_at'
	];
}
