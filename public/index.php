<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 14:01
 */

require_once __DIR__ . '/../vendor/autoload.php';
if (!isset($_SERVER['APP_ENV']) || $_SERVER['APP_ENV'] !== 'prod') {
    require_once __DIR__ . '/../config/debug.php';
}


require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../src/routing.php';
