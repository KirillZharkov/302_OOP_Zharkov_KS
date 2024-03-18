<?php

require_once 'vendor/autoload.php';

use App\Student;
use App\StudentsList;

function runTest()  
{
    $student1 = new Student();
    $student1->setLastName("Жарков")->setFirstName("Кирилл")->setFaculty("ФИиИТ")->setCourse(3)->setGroup(302);

    $student2 = new Student();
    $student2->setLastName("Роналду")->setFirstName("Леонель")->setFaculty("ПФМИ")->setCourse(5)->setGroup(123);

    echo $student1;
    echo "\n";
    echo $student2;
    echo"\n";

    $studentsList = new StudentsList();
    $studentsList->add($student1)->add($student2);

    echo "Количество студентов: " . $studentsList->count() . "\n";
    echo "Первый студент: " . $studentsList->get(0) . "\n";

    $studentsList->store('students.txt');
    $studentsList->load('students.txt');

    echo "Количество студентов после загрузки: " . $studentsList->count() . "\n";
    echo "Первый студент после загрузки: " . $studentsList->get(0) . "\n";
}