<?php

echo 'Hello world!';

include 'components/navigation.php';

require_once __DIR__ . '/../../app/Core/Database.php';

use App\Core\Database;

$db = new Database();

var_dump($db->connect());
