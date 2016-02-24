<?php

return [

        // The services that will be used to receive the notifications when a queued job fails must be specified in the channels array.
        'senders' => ['mail'],

        //these are mail notifications configurations
        'mail' => [
            'from' => 'your@email.com',
            'to' => 'your@email.com',
        ],

        //these are slack notifications configurations
        'slack' => [
            'channel' => '#failed-jobs',
            'username' => 'Failed Job Bot',
            'icon' => ':robot:',
        ],

        // if needed more services can be added here

];
