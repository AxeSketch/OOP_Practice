<?php

class Customer
{

    private static $lastId=0;

    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
        //$this->id = $id;
        if($id == null){
            $this->id=++self::$lastId;
        } else{
            $this->id=$id;
            if($id>self::$lastId){
                self::$lastId=$id;
            }
        }
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    public static function getLastId(){
        return self::$lastId;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->surname;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;
    }
}
