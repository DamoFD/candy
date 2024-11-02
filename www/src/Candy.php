<?php

namespace DamoFD\MagicForm;

use DamoFD\MagicForm\Database;

class Candy
{
    /**
    * Database connection
    *
    * @var object
    *
    * @since 1.0
    */
    private Database $database;

    /**
    * Candy constructor
    *
    * @since 1.0
    */
    public function __construct()
    {
        $this->database = new Database();
    }

    /**
    * Fetches all candy from database
    *
    * @return array
    *
    * @since 1.0
    */
    public function getAllCandy(): array
    {
        // create query
        $query = 'SELECT * FROM candy';

        // execute query
        $result = $this->database->conn->query($query);

        // return result
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /**
    * Creates a new candy in database
    *
    * @param string $name
    * @param float $price
    *
    * @return void
    *
    * @since 1.0
    */
    public function create(string $name, float $price): void
    {
        // create query
        $query = 'INSERT INTO candy (name, price) VALUES (?, ?)';

        // execute query
        $this->database->conn->prepare($query)->execute([$name, $price]);
    }

    /**
    * Get Single Candy
    *
    * @param int $id
    *
    * @return array
    *
    * @since 1.0
    */
    public function getSingleCandy(int $id): array
    {
        // create query
        $query = 'SELECT * FROM candy WHERE id = ?';

        // execute query
        $stmt = $this->database->conn->prepare($query);

        $stmt->bind_param('i', $id);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc() ?: [];
    }
}
