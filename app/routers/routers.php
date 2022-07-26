<?php

use App\Core\Router;

Router::get("/", [Router::class, "index"]);
Router::get("/test", [Router::class, "get"]);
Router::get("/test/page", [Router::class, "all"]);