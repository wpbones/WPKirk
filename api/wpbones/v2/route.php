<?php

use WPKirk\WPBones\Routing\API\Route;

Route::get('/info', function () {
    return Route::response(["tag" => "v1.0.0"]);
});
