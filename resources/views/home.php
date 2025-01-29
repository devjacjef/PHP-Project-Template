<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

echo 'Hello world!';

include 'components/navigation.php';

require_once __DIR__ . '/../../app/Core/Database.php';

use App\Core\Database;

$db = new Database();

var_dump($db->connect());
