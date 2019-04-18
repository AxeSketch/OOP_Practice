<?php

namespace Bookstore\Domain;

class Person
{
    protected $firstname;
    protected $surname;

    public function __construct($firstname, $surname)
    {
        $this->firstname = $firstname;
        $this->surname = $surname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function sayHi()
    {
        return 'Hi, what\'s up?' . $this->firstname;
     }
}
