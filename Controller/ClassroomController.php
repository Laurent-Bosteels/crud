<?php

declare(strict_types=1);

class ClassroomController
{
    public function render(array $GET, array $POST)
    {

        $loaderClasses = new ClassroomLoader();
        $loaderTeacher = new TeacherLoader();
        $loaderStudent = new StudentLoader();

        if (isset($POST['add']) and isset($POST['name']) and isset($POST['location'])) {
            $loaderClasses->addClass($POST['name'], $POST['location'], $POST['teacherId']);
            $POST['add'] = 0;
        } elseif (isset($POST['edit'])) {
            $loaderClasses->changeClass($POST['name'], $POST['location'], $POST['teacherId'], $POST['edit']);
            $POST['edit'] = 0;
        } elseif (isset($POST['delete'])) {
            $loaderClasses->deleteClass($POST['delete']);
            $POST['delete'] = 0;
        }

        $allClasses = $loaderClasses->getClasses();
        $allTeachers = $loaderTeacher->getTeachers();

        if (isset($GET['id'])) {
            $data3 = $loaderClasses->getClassById((int)$GET['id']);
            $data = $loaderStudent->getStudents();
            $teacher = ($loaderTeacher->getTeacherById($data3->getTeacherId()))->getName();
            $students = 0;

            foreach ($data as $row) {
                if (($row->getClassId()) === $data3->getId()) {
                    $students += 1;
                }
            }

            require 'View/classroomoverview.php';
        } else {
            require 'View/classroom.php';
        }
    }
}
