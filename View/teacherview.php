<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require '../Controller/TeacherHomecontroller.php';
require '../Model/connection.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Form</title>
</head>
<body>
    <h1>Teacher Form</h1>
    <br><br>

    <a href="studentview.php"> Click for the Student Form</a>
    <br><br>

    <a href="clasview.php"> Click for the Class Form</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
            <form action="" method="post">

                Name:<br>
                <input type="text" name="name" placeholder="name" required>
                <br>
                Email:<br>
                <input type="text" name="email" placeholder="email" required>
                <br>

                <br><br>
                <input type="submit" value="Submit">

            </form>
            <br><br>

            <?php
            var_dump($_POST);
            if (isset($_POST['name'], $_POST['email'])) {

                $name = $_POST['name'];
                $email = $_POST['email'];

                $stmt = openConnection()->prepare("INSERT INTO teacher (name, email)
                     VALUES (:name, :email)");

                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);

                $stmt->execute();
            }

            $selectVar = 'SELECT name, email FROM teacher ORDER BY ID';
            foreach ($connection->query($selectVar) as $line): ?>
                <tr>
                    <td><?php echo $line['name'] ?></td>
                    <td><?php echo $line['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
