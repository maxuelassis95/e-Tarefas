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
        return $this->hasMany(TaskCommentModel::class);
    }

    public function taskActivityLogs() {
        return $this->hasMany(TaskActivityLogsModel::class);
    }

    public function notifications() {
        return $this->hasMany(NotificationModel::class);
    }

}
