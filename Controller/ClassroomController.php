<?php
declare(strict_types = 1);

class ClassroomController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderClass= new ClassroomLoader();
        $allClasses = $loaderClass->getClasses();

        require 'View/classroom.php';
    }
}