<?php

declare(strict_types = 1);

class TeacherHomecontroller
{
    public function render()
    {
        require 'Model/connection.php';
        require 'View/teacherview.php';
    }
}