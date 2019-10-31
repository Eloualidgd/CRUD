<?php

declare(strict_types=1);

class Class
{

    private $name;
    private $location;
    private $assigned_teacher;
    private $assigned_student;

    public function __construct($name, $location, $assigned_teacher, $assigned_student)
    {
        $this->name = $name;
        $this->location = $location;
        $this->assigned_teacher = $assigned_teacher;
        $this->assigned_student = $assigned_student;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getAssignedTeacher()
    {
        return $this->assigned_teacher;
    }

    public function getAssignedStudent()
    {
        return $this->assigned_student;
    }
}