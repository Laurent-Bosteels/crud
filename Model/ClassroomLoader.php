<?php

class ClassroomLoader

{
    private array $classes;

    public function __construct()
    {
        $con = Database::openConnection();
        $handle = $con->prepare('SELECT * FROM class');
        $handle->execute();
        $selectedSchools = $handle->fetchAll();

        foreach ($selectedSchools as $school) {
            $this->classes[] = new Classroom((int)$school['class_id'], $school['name'], $school['location'], (int)$school['teacher_id']);
        }
    }

    public function getClasses(): array
    {
        return $this->classes;
    }
    public function getClassById(int $id)
    {
        foreach ($this->classes as $class) {
            if ($class->getId() === $id) {
                return $class;
            }
        }
    }
}
