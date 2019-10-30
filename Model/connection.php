<?php

declare(strict_types=1);

function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "localhost";
    $dbuser    = "filip";
    $dbpass    = "guest";
    $db        = "becode";

    function openConnection() {
        $pdo = new PDO('mysql:host=localhost;dbname=becode', 'filip', 'guest');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $pdo;
    }

    $connection = openConnection();