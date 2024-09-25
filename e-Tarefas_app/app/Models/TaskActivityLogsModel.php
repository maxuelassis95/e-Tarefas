<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskActivityLogsModel extends Model
{
    use HasFactory;

    protected $table = 'task_activity_logs';

    protected $fillable = [
        'task_id',
        'user_id',
        'action'
    ];

    public function task() {
        return $this->belongsTo(Task::class);
    }
}
