<?php

if (!defined('ABSPATH')) {
    exit();
}

/*
|--------------------------------------------------------------------------
| Plugin options
|--------------------------------------------------------------------------
|
| Here is where you can insert the options model of your plugin.
| These options model will store in WordPress options table
| (usually wp_options).
| You'll get these options by using `$plugin->options` property
|
*/

return [
    'version' => '1.0',
    'General' => [
        'option_1' => 'true',
        'option_2' => 'true',
        'option_3' => [
            'sub_option_of_3' => 'Hello',
        ],
        'option_4' => 'to delete',
        'option_5' => null
    ],

    'Special' => [
        'Name' => 'James Kirk',
    ],
];
