<?php

declare(strict_types=1);

class Teacher
{
    private $name;
    private $email;
    private $current_assigned_students;

    public function __construct($name, $email, $current_assigned_students)
    {
        $this->name = $name;
        $this->email = $email;
        $this->current_assigned_students = $current_assigned_students;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCurrentAssignedStudents()
    {
        return $this->current_assigned_students;
    }
}