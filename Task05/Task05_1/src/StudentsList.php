<?php

namespace App;

use Iterator;

class StudentsList implements Iterator
{
    private array $students = [];

    public function add(Student $student)
    {
        $this->students[] = $student;
    }

    public function count(): int
    {
        return count($this->students);
    }

    public function get(int $n): Student
    {
        return $this->students[$n];
    }

    public function store(string $fileName): bool
    {
        file_put_contents($fileName, serialize($this->students));

        return true;
    }

    public function load(string $fileName): bool
    {
        if (!file_exists($fileName)) {
            echo "Файл {$fileName} не существует!";
            return false;
        }

        $this->students = unserialize(file_get_contents($fileName));

        return true;
    }

    public function current(): Student | bool
    {
        return current($this->students);
    }

    public function key(): int
    {
        return current($this->students)->getId();
    }

    public function next(): void
    {
        next($this->students);
    }

    public function rewind(): void
    {
        reset($this->students);
    }

    public function valid(): bool
    {
        return key($this->students) !== null;
    }
}
