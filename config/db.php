<?php

/**
 * This file define BD access infos.
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   PHP_SimpleMVC
 * @author    WCS <contact@wildcodeschool.fr>
 * @license  --
 * @link     https://github.com/WildCodeSchool/simple-mvc
 *
 */

$user = $_SERVER['APP_DB_USER'] ? $_SERVER['APP_DB_USER'] : 'user';
$password = $_SERVER['APP_DB_PWD'] ? $_SERVER['APP_DB_PWD'] : 'password';
$localhost = $_SERVER['APP_DB_HOST'] ? $_SERVER['APP_DB_HOST'] : 'localhost';
$database_name = $_SERVER['APP_DB_NAME'] ? $_SERVER['APP_DB_NAME'] : 'database_name';

define('APP_DB_USER', $user);
define('APP_DB_PWD', $password);
define('APP_DB_HOST', $localhost);
define('APP_DB_NAME', $database_name);
