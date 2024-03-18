<?php

namespace App;

class Student 
{
    private static $idCounter = 1;
    private $id;
    private $lastName;
    private $firstName;
    private $faculty;
    private $course;
    private $group;

    public function __construct()
    {
        $this->id = self::$idCounter++;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getFirstName() 
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName) 
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getFaculty() 
    {
        return $this->faculty;    
    }

    public function setFaculty(string $faculty) 
    {
        $this->faculty = $faculty;
        return $this;
    }

    public function getCourse() 
    {
        return $this->course;   
    }

    public function setCourse(string $course)  
    {
        $this->course = $course;
        return $this;
    }

    public function getGroup() 
    {
        return $this->group;
    }

    public function setGroup(string $group) 
    {
        $this->group = $group;
        return $this;
    }

    public function __toString()
    {
        $output = "Id: $this->id\n";
        $output .= "Фамилия: $this->lastName\n";
        $output .= "Имя: $this->firstName\n";
        $output .= "Факультет: $this->faculty\n";
        $output .= "Группа: $this->group\n";

        return $output;
    }
}
