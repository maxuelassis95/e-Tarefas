<?php

namespace Database\Seeders;

use App\Models\TaskComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskComment::factory()->count(100)->create();
    }
}
