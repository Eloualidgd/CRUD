<?php
declare(strict_types=1);
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
<h2>Clasview</h2><table>
    <thead>
    <tr>
        <td> Name</td>
        <td>Location</td>
        <td>E-mail</td>
        <td>Assigned Teacher</td>
        <td>Assigned Student</td>
    </tr>
    </thead>
    <tbody>

    <?php


    if (isset($_POST['name'],$_POST['location'],
        $_POST['email'],$_POST['assigned_teacher'],$_POST['assigned_student'])) {


        $name = $_POST['name'];
        $location = $_POST['location'];
        $email = $_POST['email'];
        $assigned_teacher = $_POST['assigned_teacher'];
        $assigned_student = $_POST['assigned_student'];


        $stmt = openConnection()->prepare("INSERT INTO clas (name, location, email, assigned_teacher, assigned_student)
    VALUES (:name, :location, :email, :assigned_teacher, :assigned_student)");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':assigned_teacher', $assigned_teacher);
        $stmt->bindParam(':assigned_student', $assigned_student);


        $stmt->execute();


    }


    $selectVar = 'SELECT name, location, email, assigned_teacher, assigned_student FROM clas ORDER BY ID';
    foreach ($connection->query($selectVar) as $line): ?>
        <tr>
            <td><?php echo $line['name'] ?></td>
            <td><?php echo $line['location'] ?></td>
            <td><?php echo $line['email'] ?></td>
            <td><?php echo $line['assigned_teacher'] ?></td>
            <td><?php echo $line['assigned_student'] ?></td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<form action="" method="post">

    Name:<br>
    <input type="text" name="name" placeholder="name">
    <br>
    Location:<br>
    <input type="text" name="location" placeholder="location">
    <br>
    Email:<br>
    <input type="text" name="email" placeholder="email">
    <br>
    Email:<br>
    <input type="text" name="email" placeholder="email">
    <br><br>
    <input type="submit" value="Submit">


</form>

</body>
</html>
