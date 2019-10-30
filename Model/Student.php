<?php
declare(strict_types=1);

class student
{
    private $name;
    private $class;
    private $assigned_teacher;
    private $email;

    public function __construct($name, $class, $assigned_teacher, $email)
    {
        $this->name = $name;
        $this->class = $class;
        $this->assigned_teacher = $assigned_teacher;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getAssignedTeacher()
    {
        return $this->assigned_teacher;
    }

    public function getEmail()
    {
        return $this->email;
    }
}