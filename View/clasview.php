<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require '../Model/connection.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ClasView</title>
</head>

<body>
<h2>Clasview</h2>
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
        <td>Assigned Teacher</td>
        <td>Assigned Student</td>
    </tr>
    </thead>
    <tbody>
    <form action="" method="post">

        Name:<br>
        <input type="text" name="name" placeholder="name">
        <br>
        Location:<br>
        <input type="text" name="location" placeholder="location">
        <br>
        Assigned Teacher:<br>
        <input type="text" name="assigned_teacher" placeholder="assigned teacher">
        <br>
        Assigned Student:<br>
        <input type="text" name="assigned_student" placeholder="assigned student">
        <br><br>
        <input type="submit" value="Submit">


    </form>
    <br><br>

    <?php


    if (isset($_POST['name'], $_POST['location'], $_POST['assigned_teacher'], $_POST['assigned_students'])) {


        $name = $_POST['name'];
        $location = $_POST['location'];
        $assigned_teacher = $_POST['assigned_teacher'];
        $assigned_students = $_POST['assigned_students'];


        $stmt = openConnection()->prepare("INSERT INTO clas (name, location, assigned_teacher, assigned_students)
         VALUES (:name, :location, :assigned_teacher, :assigned_students)");


        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':assigned_teacher', $assigned_teacher);
        $stmt->bindParam(':assigned_students', $assigned_students);

        $stmt->execute();
    }

    $selectVar = 'SELECT name, location, assigned_teacher, assigned_students FROM clas ORDER BY ID';
    foreach ($connection->query($selectVar) as $line): ?>
        <tr>
            <td><?php echo $line['name'] ?></td>
            <td><?php echo $line['location'] ?></td>
            <td><?php echo $line['assigned_teacher'] ?></td>
            <td><?php echo $line['assigned_students'] ?></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



</body>
</html>
