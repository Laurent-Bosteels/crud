<?php


class ClassroomLoader

{
    private array $classes;

    public function __construct() {
        $this->loadClasses();
    }

    public function getClasses(): array {
        $this->loadClasses();
        return $this->classes;
    }

    public function loadClasses() {
        $con = Database::openConnection();
        $handle = $con->prepare('SELECT * FROM class');
        $handle->execute();
        $selectedSchools = $handle->fetchAll();
        $this->classes = [];
        foreach ($selectedSchools as $school) {
            $this->classes[] = new Classroom((int)$school['class_id'], $school['name'], $school['location'], (int)$school['teacher_id']);
        }
    }

    public function getClassById(int $id) {
        foreach ($this->classes as $class) {
            if ($class->getId() === $id) {
                return $class;
            }
        }
    }

    public function addClass($name, $location, $teacherId) {
        $con = Database::openConnection();
        $handle = $con->prepare('INSERT INTO class (name, location, teacher_id) VALUES (:name, :location, :teacherId)');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacherId', $teacherId);
        $handle->execute();
    }

    public function deleteClass($id) {
        $con = Database::openConnection();
        $handle2 = $con->prepare('UPDATE student SET class_id = NULL WHERE class_id = :id2');
        $handle2->bindValue(':id2', $id);
        $handle2->execute();
        $handle = $con->prepare('DELETE FROM class WHERE class_id = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function changeClass($name, $location, $teacherId, $id) {
        $con = Database::openConnection();
        $handle = $con->prepare('UPDATE class set name = :name, location = :location, teacher_id = :teacherId WHERE class_id = :id');
        $handle->bindValue(':name', $name);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacherId', $teacherId);
        $handle->bindValue(':id', $id);
        $handle->execute();
    }


}