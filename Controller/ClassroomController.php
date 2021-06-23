<?php

declare(strict_types=1);

class ClassroomController
{
    public function render(array $GET, array $POST)
    {
        
        $loaderClasses = new ClassroomLoader();
        $loaderTeachers = new TeacherLoader();

        if (isset($POST['add']) and isset($POST['name']) and isset($POST['location'])) {
            $loaderClasses->addClass($POST['name'], $POST['location'], $POST['teacherId']);
            $POST['add'] = 0;
        } elseif (isset($POST['edit'])) {
            $loaderClasses->changeClass($POST['name'], $POST['location'], $POST['teacherId'], $POST['edit']);
            $POST['edit'] = 0;
        } elseif (isset($POST['delete'])) {
            $loaderClasses->deleteClass($POST['delete']);
            $POST['delete'] = 0;}

        $allClasses = $loaderClasses->getClasses();
        $allTeachers = $loaderTeachers->getTeachers();

        require 'View/classroom.php';
    }
}
