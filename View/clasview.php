<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'Model/connection.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Databases</title>
</head>

<body>
<h2>Database</h2><table>
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
    $selectVar = 'SELECT name, location, email, assigned_teacher, assigned_student FROM class ORDER BY ID';
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




















<?php
//
//?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Form clas</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1>Class Form</h1>-->
<!---->
<!--<form action="" method="post">-->
<!---->
<!--    Name:<br>-->
<!--    <input type="text" name="name" placeholder="name">-->
<!--    <br>-->
<!--    Location:<br>-->
<!--    <input type="text" name="location" placeholder="location">-->
<!--    <br>-->
<!--    Assigned Teacher:<br>-->
<!--    <input type="text" name="assigned_teacher" placeholder="assigned_teacher">-->
<!--    <br>-->
<!--    Assigned Student:<br>-->
<!--    <input type="text" name="assigned_student" placeholder="assigned_student">-->
<!--    <br><br>-->
<!--    <input type="submit" value="Submit">-->
<!---->
<!---->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->
