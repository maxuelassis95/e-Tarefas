<?php

namespace Database\Seeders;

use App\Models\TaskActivityLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskActivityLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskActivityLog::factory()->count(200)->create();
    }
}
