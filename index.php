<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

//include all your model files here
require 'Model/User.php';
require 'Model/Student.php';
require 'Model/Teacher.php';
require 'Model/Class.php';

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/ClassHomecontroller.php';
require 'Controller/TeacherHomecontroller.php';
require 'Controller/StudentHomecontroller.php';


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!
//$controller = new HomepageController();
//$controller->render($_GET, $_POST);
echo "heey";

$controller = new ClassHomecontroller();
$controller = new TeacherHomecontroller();
$controller = new StudentHomecontroller();
$controller->render();