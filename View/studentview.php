<?php

require 'connection.php'

if (isset($_POST['name'],$_POST['class'],$_POST['assigned_teacher'],$_POST['email'])) {
//    $conn = new openConnection();
    $name = $_POST['name'];
    $class = $_POST['class'];
    $assigned_teacher = $_POST['assigned_teacher'];
    $email = $_POST['email'];

    $stmt = openConnection()->prepare("INSERT INTO student (name, class, assigned_teacher, email)
    VALUES (:name, :class, :assigned_teacher, :email)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':class', $class);
    $stmt->bindParam(':assigned_teacher', $assigned_teacher);
    $stmt->bindParam(':email', $email);

    $stmt->execute();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student form</title>
</head>
<body>
<h1>Student Form</h1>

<form action="" method="post">

    Name:<br>
    <input type="text" name="name" placeholder="name">
    <br>
    Class:<br>
    <input type="text" name="class" placeholder="class">
    <br>
    Assigned Teacher:<br>
    <input type="text" name="assigned_teacher" placeholder="assigned_teacher">
    <br>
    Email:<br>
    <input type="text" name="email" placeholder="email">
    <br><br>
    <input type="submit" value="Submit">


</form>

</body>
</html>
