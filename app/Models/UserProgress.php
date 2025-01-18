<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProgress
 * 
 * @property int $id
 * @property int $user_id
 * @property Carbon $progress_date
 * @property string|null $photo_url
 * @property string|null $notes
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserProgress extends Model
{
	protected $table = 'user_progress';

	protected $casts = [
		'user_id' => 'int',
		'progress_date' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'progress_date',
		'photo_url',
		'notes'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
