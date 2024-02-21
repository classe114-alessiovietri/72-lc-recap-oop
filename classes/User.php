<?php

require_once __DIR__.'/../traits/HasAddress.php';

class User {

    use HasAddress;

    // Proprietà degli oggetti User
    public $id;
    public $firstName;
    public $lastName;
    protected $email;

    public function __construct(
        $id,
        $firstName,
        $lastName,
        $email,
        $address = null
    )
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->setEmail($email);
        $this->setAddress($address);
    }

    // Capacità (metodi) degli oggetti User
    public function sayHi()
    {
        return 'Ciao!';
    }

    public function buy()
    {
        return 'Comprato!';
    }

    public function createUsername()
    {
        return $this->firstName.'_'.$this->lastName.'_'.rand(100, 999);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (
            is_numeric($email)
            ||
            !is_string($email)
        ) {
            throw new Exception('ERRORE: valore email non valido');
        }
        else {
            $this->email = $email;
        }
    }

}