<?php

namespace App;

require_once 'Student.php';

class StudentsList
{
    private $students = [];

    public function add(Student $student)  
    {
        $this->students[] = $student;
        return $this;
    }

    public function count() : int
    {
        return count($this->students);
    }

    public function get(int $n) : Student 
    {
        return $this->students[$n];
    }

    public function store(string $fileName) 
    {
        file_put_contents($fileName, serialize($this->students));
    }

    public function load(string $fileName) 
    {
        if (!file_exists($fileName)) {
            exit("Файл $fileName не найден");
        }

        $serializedData = file_get_contents($fileName);
        $this->students = unserialize($serializedData);
    }
}
