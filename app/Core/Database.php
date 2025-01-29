<?php

namespace App\Core;

use PDO;
use PDOException;

/**
 * Database class
 */
class Database
{
    private PDO $dbh;

    /**
     * Function to attempt to connect to the database using the developers configuration.
     * @return bool True if connection was successful, False if there was an issue.
     */
    public function connect()
    {
        try {
            require_once __DIR__ . '/../../config/config.php';

            $this->$dbh = new PDO(
                $dsn,
                $user,
                $pass,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => true
                )
            );

            return true;
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            return false;
        }
    }

    // TODO Implement executing queries. 
    public function query() {
        
    }
}
