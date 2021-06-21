<?php
declare(strict_types = 1);

class InfoController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $loaderStudent = new StudentLoader();
        $allClasses = $loaderStudent->getStudents();

        var_dump($allClasses);

        require 'View/info.php';
    }
}