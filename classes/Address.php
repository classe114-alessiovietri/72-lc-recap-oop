<?php

class Address {

    public $street;
    public $zip;
    public $city;
    public $country;

    public function __construct($street, $zip, $city, $country)
    {
        $this->street = $street;
        $this->zip = $zip;
        $this->city = $city;
        $this->country = $country;
    }

}