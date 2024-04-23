<?php

namespace App;

class Student
{
    private static $idCounter = 1;
    private $id;
    private $last_name;
    private $first_name;
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

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getLast()
    {
        return $this->last_name;
    }

    public function setLast($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getFirst()
    {
        return $this->first_name;
    }

    public function setFirst($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getFaculty()
    {
        return $this->faculty;
    }

    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
        return $this;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    public function __toString()
    {
        return "Id: {$this->id}\nФамилия: {$this->last_name}\nИмя: {$this->first_name}\nФакультет: {$this->faculty}\nГруппа: {$this->group}\n";
    }
}
