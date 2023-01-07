<?php
require_once 'vendor/autoload.php';
use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */
require_once 'app/Controllers/persona/personaController.php';
require_once 'routes.php';
require_once 'helpers.php';
/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('app\Controllers');

// Start the routing
SimpleRouter::start();