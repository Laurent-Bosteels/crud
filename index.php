<?php
declare(strict_types=1);

//include all your model files here
require 'Model/Database.php';
require 'Model/User.php';
//include all your controllers here
require 'Controller/StudentsController.php';
require 'Controller/TeacherController.php';
require 'Controller/ClassController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new StudentsController();

if(isset($_GET['page']) && $_GET['page'] === 'teacher') {
    $controller = new TeacherController();
}

if(isset($_GET['page']) && $_GET['page'] === 'class') {
    $controller = new ClassController();
}

$controller->render($_GET, $_POST);