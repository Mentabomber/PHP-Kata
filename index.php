<?php

class Person {

    protected $name;
    protected $age;
    protected $occupation;

    // Constructor to initialize properties with validation
    public function __construct($name, $age, $occupation) {
        $this->setName($name);
        $this->setAge($age);
        $this->setOccupation($occupation);
    }

    // Getter for name
    public function get_name() {
        return $this->name;
    }

    // Setter for name with validation
    public function set_name($name) {
        if (!is_string($name)) {
            throw new InvalidArgumentException("Name must be a string!");
        }
        $this->name = $name;
    }

    // Getter for age
    public function get_age() {
        return $this->age;
    }

    // Setter for age with validation
    public function set_age($age) {
        if (!is_int($age) || $age < 0) {
            throw new InvalidArgumentException("Age must be a non-negative integer!");
        }
        $this->age = $age;
    }

    // Getter for occupation
    public function get_occupation() {
        return $this->occupation;
    }

    // Setter for occupation with validation
    public function set_occupation($occupation) {
        if (!is_string($occupation)) {
            throw new InvalidArgumentException("Occupation must be a string!");
        }
        $this->occupation = $occupation;
    }

}


   

    // Using setters to change properties
    $person->set_name("Jane Doe");
    $person->set_age(28);
    $person->set_occupation("Surgeon");

    echo "Updated Name: " . $person->get_name() . "\n";        // Output: Updated Name: Jane Doe
    echo "Updated Age: " . $person->get_age() . "\n";          // Output: Updated Age: 28
    echo "Updated Occupation: " . $person->get_occupation() . "\n"; // Output: Updated Occupation: Surgeon

?>