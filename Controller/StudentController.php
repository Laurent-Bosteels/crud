<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $loaderStudent = new StudentLoader();
        $allStudents = $loaderStudent->getStudents();

        if (isset($POST['name']) and isset($POST['email']) and ((isset($POST['classId'])and is_numeric($POST['classId'])))){
            $loaderStudent->addStudent($POST['name'],$POST['email'],$POST['classId']);
            header("Refresh:0");
        }
    
        require 'View/student.php';
    }
}