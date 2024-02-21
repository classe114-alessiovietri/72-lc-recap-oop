<?php

require_once __DIR__.'/User.php';

class Admin extends User {

    // STESSE PROPRIETà DI User
    // +
    public $canManagePosts;

    public function __construct(
        $id,
        $firstName,
        $lastName,
        $email,
        $canManagePosts,
        $address = null
    )
    {
        parent::__construct(
            $id,
            $firstName,
            $lastName,
            $email,
            $address
        );
        $this->canManagePosts = $canManagePosts;
    }
    
    // STESSE CAPACITà DI User
    // +
    // LE SUE

}