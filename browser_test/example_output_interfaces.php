<?php 
/* Do not change, this code is generated from Golang structs */


class Address {
    public string     $city;
    public float     $number;
    public string     $country;
}
class PersonalInfo {
    public string/* [] */     $hobby;
    public string     $pet_name;
    public       $inter;
}
class Person {
    public string     $name;
    public PersonalInfo     $personal_info;
    public string/* [] */     $nicknames;
    public Address/* [] */     $addresses;
    public Address     $address;
    public int/* [] */     $metadata;
    public Person/* [] */     $friends;
}