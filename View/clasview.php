<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require '../Controller/ClassHomecontroller.php';
require '../Model/connection.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>

<body>
    <h2>Classes</h2>
    <br><br>

    <a href="studentview.php"> Click for the Student Form</a>
    <br><br>

    <a href="teacherview.php"> Click for the Teacher Form</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Location</td>
            </tr>
        </thead>
        <tbody>
            <form action="" method="post">
                Name:<br>
                <input type="text" name="name" placeholder="name">
                <br>
                Location:<br>
                <select class="form-control mb-1" name="location" required>
                    <option value="Brussel🇺🇸🇺🇸🇺🇸">Brussel</option>
                    <option value="Antwerpen">Antwerpen</option>
                    <option value="Gent">Gent</option>
                    <option value="Hasselt">Hasselt</option>
                    <option value="Luik">Luik</option>
                    <option value="Charleroi">Charleroi</option>
                </select>
                <br>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        <br><br>

        <?php
        var_dump($_POST);

        if (isset($_POST['name'], $_POST['location'])) {

            $name = $_POST['name'];
            $location = $_POST['location'];

            $stmt = openConnection()->prepare("INSERT INTO classroom (name, location)
             VALUES (:name, :location)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':location', $location);

            $stmt->execute();
        }

        $selectVar = 'SELECT name, location FROM classroom ORDER BY ID';
        foreach ($connection->query($selectVar) as $line): ?>
            <tr>
                <td><?php echo $line['name'] ?></td>
                <td><?php echo $line['location'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
