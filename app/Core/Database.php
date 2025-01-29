<?php

namespace App\Core;

use PDO;
use PDOException;

/**
 * Database class, Singleton pattern
 */
class Database
{
    // Connection to database server 
    private static ?PDO $conn = null;

    /**
     * Connect to the database.
     * @return void
     */
    public static function connect()
    {
        try {
            require_once __DIR__ . '/../../config/config.php';

            self::$conn = new PDO(
                $dsn,
                $user,
                $pass,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => true
                )
            );
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // TODO Implement the params.
    public static function select(string $sql, ?array $params = null): array
    {
        try {
            $stmt = self::$conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Query failed: " . $e->getMessage());
        }
        return [];
    }

    // Was going to use this as a helper function but may not be needed...
    // private static function handleParams(?array $params = null)
    // {
    //     $p = [];

    //     foreach ($params as $param) {
    //         $p[] = $param;
    //     }

    //     return $p;
    // }

    public static function insert(string $sql, ?array $params = null): bool
    {
        try {
            $stmt = self::$conn->prepare($sql);
            return $stmt->execute($params);
        } catch (PDOException $e) {
            error_log("Query failed: " . $e->getMessage());
        }

        return false;
    }

    public static function update(string $sql, ?array $params = null) {}

    public static function delete(string $sql, ?array $params = null) {}

    /**
     * Allows the execution of database statement.
     * @param string $sql The statement to be executed.
     * @return void Does not return anything.
     */
    public static function statement(string $sql) {}

    /**
     * Allows for the developer to execute unprepared statements.
     * Warning: DO NOT EXPOSE THIS TO ANY USER INPUT AS IT IS VERY DANGEROUS.
     * @param string $sql
     * @return void
     */
    public static function unprepared(string $sql) {}

    // TODO Implement executing queries.
}
