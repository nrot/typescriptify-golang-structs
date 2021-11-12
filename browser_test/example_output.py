# Do not change, this code is generated from Golang structs 

import json
from typing import *

class Address: 
    city: str
    number: float
    country: str

    def __init__(self, source: Any = {}): 
        if isinstance(source, str):
            source = json.loads(source)
        self.city = source["city"]
        self.number = source["number"]
        self.country = source["country"]
    

class PersonalInfo: 
    hobby: list[str]
    pet_name: str
    inter: Any

    def __init__(self, source: Any = {}): 
        if isinstance(source, str):
            source = json.loads(source)
        self.hobby = source["hobby"]
        self.pet_name = source["pet_name"]
        self.inter = source["inter"]
    

class Person: 
    name: str
    personal_info: PersonalInfo
    nicknames: list[str]
    addresses: list[Address]
    address: Address
    metadata: list[int]
    friends: list['Person']

    def __init__(self, source: Any = {}): 
        if isinstance(source, str):
            source = json.loads(source)
        self.name = source["name"]
        self.personal_info = self.convertValues(source["personal_info"], PersonalInfo)
        self.nicknames = source["nicknames"]
        self.addresses = self.convertValues(source["addresses"], Address)
        self.address = self.convertValues(source["address"], Address)
        self.metadata = source["metadata"]
        self.friends = self.convertValues(source["friends"], 'Person')
    

    def convertValues(a: Any, classs: Any, asMap: bool = false) -> Any:
        raise SyntaxError("Not implemented yet")