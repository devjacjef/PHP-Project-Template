<?php

// Sticking to the whole "not using 3rd party dependencies"
// All tests are written in Plain PHP.

require_once __DIR__ . '/../app/Core/Database.php';

use App\Core\Database;

function testDatabaseSingleton() {
    $db1 = Database::getInstance();
    $db2 = Database::getInstance();

    if (assert($db1 === $db2))
        echo __FUNCTION__ . '() Passed.';
    else
        echo __FUNCTION__ . '() Failed.';
}

/**
 * RUNNING TESTS
 */

testDatabaseSingleton();

 /**
  * END OF RUNNING TESTS
  */