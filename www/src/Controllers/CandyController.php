<?php

namespace DamoFD\MagicForm\Controllers;

use DamoFD\MagicForm\Candy;

class CandyController
{
    /**
    * Candy
    *
    * @var object
    *
    * @since 1.0
    */
    private Candy $candy;

    /**
    * Candy constructor
    *
    * @since 1.0
    */
    public function __construct()
    {
        $this->candy = new Candy();
    }

    /**
    * Show all candy
    *
    * @return void
    *
    * @since 1.0
    */
    public function index(): void
    {
        // get all candy
        $candies = $this->candy->getAllCandy();

        // show all candy
        require './src/views/AllCandy.php';
    }

    /**
    * Show Single Candy
    *
    * @param int $id
    *
    * @return void
    *
    * @since 1.0
    */
    public function show(int $id): void
    {
        // get single candy
        $candy = $this->candy->getSingleCandy($id);

        if (!$candy) {
            header('Location: /');
            exit;
        }

        // show single candy
        require './src/views/ShowCandy.php';
    }

    /**
    * Show Create Candy Page
    *
    * @return void
    *
    * @since 1.0
    */
    public function create(): void
    {
        require './src/views/CreateCandy.php';
    }

    /**
    * Store Candy to Database
    *
    * @return void
    *
    * @since 1.0
    */
    public function store(): void
    {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $this->candy->create($name, $price);
        header('Location: /');
    }
}
