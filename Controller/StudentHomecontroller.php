<?php


class StudentHomecontroller
{
    public function render()
    {
        //this is just example code, you can remove the line below
        require 'Model/connection.php';
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
        //load the view
        require 'View/studentview.php';
    }
}