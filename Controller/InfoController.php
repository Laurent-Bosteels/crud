<?php
declare(strict_types = 1);

class InfoController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderStudent = new StudentLoader();
        $allStudents = $loaderStudent->getStudents();
        var_dump($allStudents);

        $loaderClass= new ClassroomLoader();
        $allClasses = $loaderClass->getClasses();
        var_dump($allClasses);
        
        require 'View/info.php';
    }
}