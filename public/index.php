<?php

/**
 * Front controller
 *
 * PHP version 8.0
 */
/**
 * Composer
 */
require '../vendor/autoload.php';

/**
* Sessions
*/
session_start();

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Routing
 */
require '../Core/Router.php';
$router = new Core\Router();
