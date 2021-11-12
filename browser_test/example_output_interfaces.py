# Do not change, this code is generated from Golang structs 

import json
from typing import *

class Address: 
    city: str
    number: float
    country: str

class PersonalInfo: 
    hobby: list[str]
    pet_name: str

class Person: 
    name: str
    personal_info: PersonalInfo
    nicknames: list[str]
    addresses: list[Address]
    address: Address
    metadata: list[int]
    friends: list['Person']