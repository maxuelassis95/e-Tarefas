<?php

if(!function_exists('getRandomActionActivityLogs')) {

    function getRandomActionActivityLogs() {

        $actions = [
            'comment_task',
            'create_task',
            'delete_task',
            'update_task',
            'completed_task'
        ];

        $randomKey = array_rand($actions);

        return $actions[$randomKey];

    }

}