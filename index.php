<?php

ini_set('display_errors', 1);

define("ROOT_DIR", str_replace("\\", "/", __DIR__));

require_once 'app_server/bootstrap.php';

(new App())->run();