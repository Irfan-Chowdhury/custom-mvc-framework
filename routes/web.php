<?php 

use App\Controllers\BookController;

return [
    "/users/profile" => [BookController::class, "index"],

    "/users/profile/edit" => [BookController::class, "edit"], 

    "/route1" => [BookController::class, "toAnotherRoute"],

    "/route2" => [BookController::class, "toAnotherMethod"]
];