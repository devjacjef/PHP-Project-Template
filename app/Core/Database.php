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
    // Object Instance
    private static ?Database $instance = null;

    /**
     * Connect to the database.
     * @return PDO|null
     */
    private function __construct()
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

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // TODO Implement the params.
    public static function select(string $sql, ?array $params = null): array
    {
        if (self::$conn === null) {
            self::getInstance();
        }

        try {
            $stmt = self::$conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Query failed: " . $e->getMessage());
        }
        return [];
    }

    public static function insert(string $sql, ?array $params = null): bool
    {
        if (self::$conn === null) {
            self::getInstance();
        }

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
    public static function statement(string $sql)
    {
        try {
            $stmt = self::$conn->prepare($sql);
            $stmt->execute();
        } catch (PDOException $e) {
            error_log("Query failed: " . $e->getMessage());
        }
    }

    /**
     * Allows for the developer to execute unprepared statements.
     * Warning: DO NOT EXPOSE THIS TO ANY USER INPUT AS IT IS VERY DANGEROUS.
     * @param string $sql
     * @return void
     */
    public static function unprepared(string $sql) {}

    // TODO Implement executing queries.
}
