package main

import "github.com/tkrajina/typescriptify-golang-structs/pythonfy"

type Address struct {
	// Used in html
	City    string  `json:"city"`
	Number  float64 `json:"number"`
	Country string  `json:"country,omitempty"`
}

type PersonalInfo struct {
	Hobbies []string `json:"hobby"`
	PetName string   `json:"pet_name"`
}

type Person struct {
	Name         string       `json:"name"`
	PersonalInfo PersonalInfo `json:"personal_info"`
	Nicknames    []string     `json:"nicknames"`
	Addresses    []Address    `json:"addresses"`
	Address      *Address     `json:"address"`
	Metadata     []byte       `json:"metadata" ts_type:"{[key:string]:string}"`
	Friends      []*Person    `json:"friends"`
}

func main() {
	converter := pythonfy.New()
	converter.CreateConstructor = true
	converter.Indent = "    "
	converter.BackupDir = ""

	converter.Add(Person{})

	err := converter.ConvertToFile("browser_test/example_output.py")
	if err != nil {
		panic(err.Error())
	}

	converter.CreateInterface = true
	err = converter.ConvertToFile("browser_test/example_output_interfaces.py")
	if err != nil {
		panic(err.Error())
	}
}
