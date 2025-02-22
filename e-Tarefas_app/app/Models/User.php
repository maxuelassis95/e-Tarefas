<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function profile() {
       return $this->hasOne(Profile::class); 
    }

    public function tasks() {
        return $this->hasMany(Task::class);
    }

    public function taskComments() {
        return $this->hasMany(TaskComment::class);
    }

    public function taskActivityLogs() {
        return $this->hasMany(TaskActivityLog::class);
    }

    public function notifications() {
        return $this->hasMany(Notification::class);
    }

    // Um usuario pode colaborar em diversas tarefas N:N
    public function taskColaborations() {
        return $this->belongsToMany(
            Task::class, 'task_collaborations', 'user_id', 'task_id'
        )->withPivot('access_level', 'status');
    }
}
