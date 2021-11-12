<?php 
/* Do not change, this code is generated from Golang structs */


class Address {
    public string     $city;
    public float     $number;
    public string     $country;

    public function __constructor($source) {
        if ('string' == gettype($source)) $source = json_decode($source);
        $this->city = $source["city"];
        $this->number = $source["number"];
        $this->country = $source["country"];
    }
}
class PersonalInfo {
    public string/* [] */     $hobby;
    public string     $pet_name;
    public       $inter;

    public function __constructor($source) {
        if ('string' == gettype($source)) $source = json_decode($source);
        $this->hobby = $source["hobby"];
        $this->pet_name = $source["pet_name"];
        $this->inter = $source["inter"];
    }
}
class Person {
    public string     $name;
    public PersonalInfo     $personal_info;
    public string/* [] */     $nicknames;
    public Address/* [] */     $addresses;
    public Address     $address;
    public int/* [] */     $metadata;
    public Person/* [] */     $friends;

    public function __constructor($source) {
        if ('string' == gettype($source)) $source = json_decode($source);
        $this->name = $source["name"];
        $this->personal_info = $this->convertValues($source["personal_info"], PersonalInfo);
        $this->nicknames = $source["nicknames"];
        $this->addresses = $this->convertValues($source["addresses"], Address);
        $this->address = $this->convertValues($source["address"], Address);
        $this->metadata = $source["metadata"];
        $this->friends = $this->convertValues($source["friends"], Person);
    }
}