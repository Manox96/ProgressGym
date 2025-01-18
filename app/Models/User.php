<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $role
 *
 * @property Collection|CoachProfile[] $coach_profiles
 * @property Collection|MealPlan[] $meal_plans
 * @property Collection|UserProfile[] $user_profiles
 * @property Collection|UserProgress[] $user_progresses
 * @property Collection|WorkoutPlan[] $workout_plans
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function coach_profiles()
	{
		return $this->hasMany(CoachProfile::class);
	}

	public function meal_plans()
	{
		return $this->belongsToMany(MealPlan::class, 'user_meal_plans')
					->withPivot('id')
					->withTimestamps();
	}

	public function user_profiles()
	{
		return $this->hasMany(UserProfile::class);
	}

	public function user_progresses()
	{
		return $this->hasMany(UserProgress::class);
	}

	public function workout_plans()
	{
		return $this->belongsToMany(WorkoutPlan::class, 'user_workout_plans')
					->withPivot('id')
					->withTimestamps();
	}
}
