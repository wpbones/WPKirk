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
*
*/

/**
* Fired when the deploy command is started
*
* @param object $console Instance of WPBones Console
* @param string $path Destination path
*/
add_action('wpbones_console_deploy_start', function ($console, $path) {
    // Do something
}, 10, 2);

/**
* Fired before compile assets
*
* @param object $console Instance of WPBones Console
* @param string $path Destination path
*/
add_action('wpbones_console_deploy_before_compile_assets', function ($console, $path) {
    // Do something
}, 10, 2);

/**
* Filter the console command used to compile assets
*
* @param string $command Command to use. Default 'gulp production'
* @return string A different command or NULL to skip the compilation
*/
add_filter('wpbones_console_deploy_gulp_production', function ($command) {
    return $command;
});

/**
* Fired after compile assets
*
* @param object $console Instance of WPBones Console
* @param string $path Destination path
*/
add_action('wpbones_console_deploy_after_compile_assets', function ($console, $path) {
    // Do something
}, 10, 2);

/**
* Filter the list of the folder to skip for the deploy version
*
* @param array $folders List of folders to skip
* @return array List of folders to skip
*/
add_filter('wpbones_console_deploy_skip_folders', function ($folders) {
    return $folders;
});

/**
* Fired when the deploy command is completed
*
* @param object $console Instance of WPBones Console
* @param string $path Destination path
*/
add_action('wpbones_console_deployed', function ($console, $path) {
    // Do something
}, 10, 2);
