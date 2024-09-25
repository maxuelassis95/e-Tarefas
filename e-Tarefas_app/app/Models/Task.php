<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    use HasFactory;

    protected $table = 'tasks';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'due_date',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function taskComments() {
        return $this->hasMany(TaskComment::class);
    }

    public function taskActivityLogs() {
        return $this->hasMany(TaskActivityLogs::class);
    }

    public function notifications() {
        return $this->hasMany(Notification::class);
    }

    // Uma tarefa pode ter deversos colaboradores
    public function collaborarions() {
        return $this->belongsToMany(
            User::class, 'task_colaborations', 'user_id', 'task_id'
        )->withPivot('access_level', 'status');
    }

}
