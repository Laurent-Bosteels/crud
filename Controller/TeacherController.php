<?php
declare(strict_types=1);

class Teachercontroller
{
    public function render(array $GET, array $POST)
    {
        $loaderTeacher = new TeacherLoader();
        
        if (isset($POST['add']) and isset($POST['name']) and isset($POST['email'])) {
            $loaderTeacher->addTeacher($POST['name'], $POST['email']);
            $POST['add'] = 0;}
        elseif (isset($POST['edit'])) {
            $loaderTeacher->changeTeacher($POST['name'], $POST['email'], $POST['edit']);
            $POST['edit'] = 0;
        } elseif (isset($POST['delete'])) {
            $teacherMessage = $loaderTeacher->deleteTeacher($POST['delete']);
            $POST['delete'] = 0;
        } 

        $allTeachers = $loaderTeacher->getTeachers(); 
        require 'View/teacher.php';

    }
}