<?php

namespace DamoFD\MagicForm;

use Exception;
use mysqli;

class Database
{
    /**
    * Name of the server
    *
    * @var string
    *
    * @since 1.0
    */
    private string $servername = 'db';

    /**
    * The username for the database
    *
    * @var string
    *
    * @since 1.0
    */
    private string $username = 'test';

    /**
    * The password for the database
    *
    * @var string
    *
    * @since 1.0
    */
    private string $password = 'test';

    /**
    * The name of the database
    *
    * @var string
    *
    * @since 1.0
    */
    private string $dbname = 'test';

    /**
    * The database connection
    *
    * @var object
    *
    * @since 1.0
    */
    public mysqli $conn;

    /**
    * Database constructor
    *
    * @since 1.0
    */
    public function __construct()
    {
        // Connect to the database
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            throw new Exception('Connection failed: ' . $this->conn->connect_error);
        }
    }

    /**
    * Checks if db is connected
    *
    * @return bool
    *
    * @since 1.0
    */
    public function isConnected(): bool
    {
        return $this->conn->ping();
    }
}
