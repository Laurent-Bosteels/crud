<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderStudent = new StudentLoader();
        $loaderClass = new ClassroomLoader();

        if (isset($POST['name']) and isset($POST['add']) and isset($POST['email']) and ((isset($POST['classId'])and is_numeric($POST['classId'])))){
            $loaderStudent->addStudent($POST['name'],$POST['email'],$POST['classId']);
            header("Refresh:0");
        } elseif (isset($POST['delete'])) {
            $loaderStudent->deleteStudent($POST['delete']);
            $POST['delete'] = 0;
            header("Refresh:0");
        } elseif (isset($POST['edit'])) {
            $loaderStudent->changeStudent($POST['name'], $POST['email'], $POST['classId'], $POST['edit']);
            $POST['edit'] = 0;
            header("Refresh:0");
        }

        $allStudents = $loaderStudent->getStudents();
        $allClasses = $loaderClass->getClasses();
    
        require 'View/student.php';
    }
}