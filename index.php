<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

require 'routes/web.php';

routeToController($uri, $routes);
