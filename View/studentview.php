<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

require '../Controller/StudentHomecontroller.php';
require '../Model/connection.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>

<body>
    <h2>Student Overview</h2>
    <br><br>

    <a href="clasview.php"> Click for the Class Form</a>
    <br><br>

    <a href="teacherview.php"> Click for the Teacher Form</a>
    <br><br>

    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>E-mail</td>
                <td>Class</td>
            </tr>
        </thead>
        <tbody>
            <form action="" method="post">
                Name:<br>
                    <input type="text" name="name" placeholder="name">
                <br>
                E-mail:<br>
                    <input type="text" name="email" placeholder="email">
                <br>
                Class:<br>
                    <select class="form-control mb-1" name="class" required>
                        <option value="1🇺🇸🇺🇸🇺🇸">Giertz</option>
                        <option value="2">Lamarr</option>
                    </select>
                <br>
                <br><br>
                <input type="submit" value="Submit">
            </form>

        <br><br>

        <?php
        var_dump($_POST);

        if (isset($_POST['name'], $_POST['email'], $_POST['class'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $class = $_POST['class'];

            $stmt = openConnection()->prepare("INSERT INTO student (name, email, class)
                 VALUES (:name, :email, :class)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':class', $class);

            $stmt->execute();
        }

        $selectVar = 'SELECT name, email, class FROM student ORDER BY ID';
        foreach ($connection->query($selectVar) as $line): ?>
            <tr>
                <td><?php echo $line['name'] ?></td>
                <td><?php echo $line['email'] ?></td>
                <td><?php echo $line['class'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>