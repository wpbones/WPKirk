<?php

/**
 * This file is included by "bones" command. You'll find
 *
 * $this Instance of bones command console
 * $path Destination path
 *
 * You'll able to:
 *
 * Delete a file
 *   @unlink("{$path}/myfile");
 *
 * Delete a folder
 *   $this->deleteDirectory("{$path}/docs");
 *
 */

/*
add_filter('wpbones_console_deploy_skip', function($skip){
    return array_merge($skip,[
        'docs'
    ]);
});
*/