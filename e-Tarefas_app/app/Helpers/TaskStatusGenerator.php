<?php

namespace App\Helpers;

class TaskStatusGenerator {
    
    public static function getRandomStatus() {

        $randomNumber = rand(1, 100);

        if($randomNumber <= 70) {
            return 'pending';
        } else if($randomNumber <= 90) {
            return 'completed';
        } else {
            return 'in_progress';
        }

    }

}