<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

echo 'Hello world!';

include 'components/navigation.php';

require_once __DIR__ . '/../../app/Core/Database.php';

use App\Core\Database;

Database::connect();

var_dump(Database::select("SELECT * FROM cheese"));

Database::insert("INSERT INTO cheese(name) values (?)", ['hi again!']);

?>