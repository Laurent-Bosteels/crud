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

    public function addStudent($name,$email,$id){
        $con = Database::openConnection();
        $handle = $con->prepare('INSERT INTO student (name, email, class_id) VALUES (:name, :email, :classId)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':classId', $id);
        $handle->execute();
    }

    public function deleteStudent($id) {
        $con = Database::openConnection();
        $handle = $con->prepare('DELETE FROM student WHERE student_id = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function changeStudent($name, $email, $classId, $id) {
        $con = Database::openConnection();
        $handle = $con->prepare('UPDATE student set name = :name, email = :email, class_id = :classId WHERE student_id = :id');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':classId', $classId);
        $handle->bindValue(':id', $id);
        $handle->execute();
    }



}
