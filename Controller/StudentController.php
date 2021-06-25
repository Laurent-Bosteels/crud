<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    
    {

        $loaderStudent = new StudentLoader();
        $loaderClass = new ClassroomLoader();
        $loaderTeacher = new TeacherLoader();


        if (isset($POST['name']) and isset($POST['add']) and isset($POST['email']) and ((isset($POST['classId'])and is_numeric($POST['classId'])))){
            $loaderStudent->addStudent($POST['name'],$POST['email'],$POST['classId']);
        } elseif (isset($POST['delete'])) {
            $loaderStudent->deleteStudent($POST['delete']);
            $POST['delete'] = 0;
        } elseif (isset($POST['edit'])) {
            $loaderStudent->changeStudent($POST['name'], $POST['email'], $POST['classId'], $POST['edit']);
            $POST['edit'] = 0;
        }

        $allStudents = $loaderStudent->getStudents();
        $allClasses = $loaderClass->getClasses();

        if(isset($GET['id'])){
            $data3 = $loaderStudent->getStudentById((int)$GET['id']);
            $teacherNew = $loaderTeacher->getTeacherByStudentId($data3->getId());
            require 'View/overview.php';
        } else {
            require 'View/student.php';
        }
    }
}