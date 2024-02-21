<?php
require_once __DIR__.'/../classes/Address.php';

trait HasAddress {

    protected $address;

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress(Address|null $address)
    {
        $this->address = $address;
    }

}