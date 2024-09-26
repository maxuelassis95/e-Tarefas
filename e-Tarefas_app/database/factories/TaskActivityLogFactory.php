<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\TaskActivityLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskActivityLogFactory extends Factory
{

    protected $model = TaskActivityLog::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'task_id' => Task::inRandomOrder()->first()->id,
            'action' => getRandomActionActivityLogs()
        ];
    }
}
