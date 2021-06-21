<?php


class StudentLoader
{
    private array $students;


    public function __construct()
    {
        $con = Database::openConnection();
        $handle = $con->prepare('SELECT * FROM student');
        $handle->execute();
        $selectedStudents = $handle->fetchAll();

        foreach ($selectedStudents as $student) {
            $this->students[] = new Student((int)$student['student_id'], $student['name'], $student['email'], (int)$student['class_id']);
        }
    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function getStudentById(int $id)
    {
        foreach ($this->students as $student) {
            if ($student->getId() === $id) {
                return $student;
            }
        }
    }
}
