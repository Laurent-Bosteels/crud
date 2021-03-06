<?php


class TeacherLoader

{
    private array $teachers;

    public function __construct()
    {
        $this->loadTeachers();
    }

    public function getTeachers(): array
    {
        $this->loadTeachers();
        return $this->teachers;
    }

    public function loadTeachers()
    {
        $con = Database::openConnection();
        $handle = $con->prepare('SELECT * FROM teacher');
        $handle->execute();
        $selectedTeachers = $handle->fetchAll();
        $this->teachers = [];
        foreach ($selectedTeachers as $teacher) {
            $this->teachers[] = new Teacher((int)$teacher['teacher_id'], $teacher['name'], $teacher['email']);
        }
    }

    public function getTeacherById(int $id)
    {
        foreach ($this->teachers as $teacher) {
            if ($teacher->getId() === $id) {
                return $teacher;
            }
        }
    }

    public function changeTeacher($name, $email, $id)
    {
        $con = Database::openConnection();
        $handle = $con->prepare('UPDATE teacher set Name = :name, Email = :email WHERE teacher_id = :id');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function deleteTeacher($id)
    {
        $con = Database::openConnection();
        $handle3 = $con->prepare('SELECT * FROM class WHERE teacher_id = :id3');
        $handle3->bindValue(':id3', $id);
        $handle3->execute();
        $checkClass = $handle3->fetchAll();

        if (!empty($checkClass)) {
            return "Teacher is still assigned to a class";
        } else {
            $handle = $con->prepare('DELETE FROM teacher WHERE teacher_id = :id');
            $handle->bindValue(':id', $id);
            $handle->execute();
        }
    }

    public function addTeacher($name, $email)
    {
        $con = Database::openConnection();
        $handle = $con->prepare('INSERT INTO teacher (Name, Email) VALUES (:name, :email)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':email', $email);
        $handle->execute();
    }

    public function getTeacherByStudentId(int $id)
    {
        $con = Database::openConnection();
        $handle = $con->prepare('SELECT teacher.* FROM teacher INNER JOIN class ON teacher.teacher_id = class.teacher_id INNER JOIN student ON class.class_id = student.class_id WHERE student.student_id = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        return $selectedTeacher = $handle->fetchAll();
    }
    

}