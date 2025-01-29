<?php

/**
 * TODO Implement a way to catch errors with require_once
 * https://stackoverflow.com/questions/8261756/how-to-catch-error-of-require-or-include-in-php
 */

 // This has to be implemented by the developer.
require_once 'config-db.php';

$dsn = PREFIX . ':' . DB_HOST . ';' . DB_PORT . ';' . DB_NAME;

$user = $username;
$pass = $password;