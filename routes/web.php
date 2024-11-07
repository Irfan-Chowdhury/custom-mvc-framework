<?php 

use App\Controllers\BookController;

return [
    "/users/profile" => [BookController::class, "index"],

    "users/profile/edit" => [BookController::class, "edit"]
];