<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Student;
use App\StudentsList;

class StudentsListTest extends TestCase
{
    public function testCurrentAndNext(): void
    {
        $studentFirst = new Student();
        $studentFirst->setLast('Жарков')->setFirst('Кирилл')->setCourse('3')->setGroup('302');

        $studentSecond = new Student();
        $studentSecond->setLast('Полушатов')->setFirst('Алексей')->setCourse('2')->setGroup('205');

        $studentThird = new Student();
        $studentThird->setLast('Биушкин')->setFirst('Денис')->setCourse('1')->setGroup('102');

        $studentsList = new StudentsList();
        $studentsList->add($studentFirst);
        $studentsList->add($studentSecond);
        $studentsList->add($studentThird);

        $this->assertSame($studentFirst, $studentsList->current());
        $studentsList->next();
        $this->assertSame($studentSecond, $studentsList->current());
    }

    public function testKey(): void
    {
        $studentFirst = new Student();
        $studentFirst->setLast('Жарков')->setFirst('Кирилл')->setCourse('3')->setGroup('302');

        $studentSecond = new Student();
        $studentSecond->setLast('Полушатов')->setFirst('Алексей')->setCourse('2')->setGroup('205');

        $studentThird = new Student();
        $studentThird->setLast('Биушкин')->setFirst('Денис')->setCourse('1')->setGroup('102');

        $studentsList = new StudentsList();
        $studentsList->add($studentFirst);
        $studentsList->add($studentSecond);
        $studentsList->add($studentThird);

        $this->assertSame($studentFirst->getId(), $studentsList->key());
    }

    public function testRewind(): void
    {
		$studentFirst = new Student();
        $studentFirst->setLast('Жарков')->setFirst('Кирилл')->setCourse('3')->setGroup('302');

        $studentSecond = new Student();
        $studentSecond->setLast('Полушатов')->setFirst('Алексей')->setCourse('2')->setGroup('205');

        $studentThird = new Student();
        $studentThird->setLast('Биушкин')->setFirst('Денис')->setCourse('1')->setGroup('102');

        $studentsList = new StudentsList();
        $studentsList->add($studentFirst);
        $studentsList->add($studentSecond);
        $studentsList->add($studentThird);

        $studentsList->next();
        $studentsList->next();
        $studentsList->rewind();

        $this->assertSame($studentFirst, $studentsList->current());
    }

    public function testValid(): void
    {
        $studentFirst = new Student();
        $studentFirst->setLast('Жарков')->setFirst('Кирилл')->setCourse('3')->setGroup('302');

        $studentSecond = new Student();
        $studentSecond->setLast('Полушатов')->setFirst('Алексей')->setCourse('2')->setGroup('205');

        $studentThird = new Student();
        $studentThird->setLast('Биушкин')->setFirst('Денис')->setCourse('1')->setGroup('102');

        $studentsList = new StudentsList();
        $studentsList->add($studentFirst);
        $studentsList->add($studentSecond);
        $studentsList->add($studentThird);

        $studentsList->next();
        $studentsList->next();
        $studentsList->next();

        $this->assertFalse($studentsList->valid());
    }
}
