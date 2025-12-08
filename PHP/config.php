<?php
//VARIABLES, all reassignable.

$firstname = "Gabriele";
$lastName = "Bolognese";
$age = 16;
$birthday = "06-12-2008";
$gender = "male";
$dead = false;

//CONSTANTS: not reassignable.

define("NAME", $firstname); // assign each constant to the value of the variable
define("LASTNAME", $lastName);
define("AGE", $age);
define("BIRTHDAY", $birthday);
define("GENDER", $gender);
define("DEAD", $dead);

echo "Name: " . NAME;
echo "<br>";
echo "Surname: " . LASTNAME;
echo "<br>";
echo "Age: " . AGE;
echo "<br>";
echo "Birthday: " . BIRTHDAY;
echo "<br>";
echo "Gender: " . GENDER;
echo "<br>";
echo "Is dead: " . DEAD;
echo "<br>";

defined("DEAD"); //returns 1 or 0

const constant = "I'm a constant"; //created at compile time
define("CONSTANTS", "Compiled at runtime"); //created at runtime, can be used in conditions

echo constant;
echo "<br>";
echo CONSTANTS;
echo "<br>";
//you can also make variables constants with the NAME of the variable, for example
/*
define("INFO_" . $firstname, $firstname);
define("INFO_" . $lastName, $lastName);
define("INFO_" . $age, $age);
define("INFO_" . $birthday, $birthday);
define("INFO_" . $gender, $gender);
define("INFO_" . $dead, $dead);*/

echo "<br>";

//ARRAYS:

$classmates = array("Gabriele", "Alessandro", "Massimo", "Daniela", "Emma", "Vincenzo");

//for with index i
for ($i = 0; $i < 10; $i++) {
    if (isset($classmates[$i])) { //isset for
        echo "index " . $i . " has value: " . $classmates[$i] . "<br>";
    } else {
        echo "index " . $i . " has no value" . "<br>";
    }
}

echo "<br>";
echo "For each loop";
foreach ($classmates as $classmate) { //use the as keyword
    echo "value: " . $classmate . "<br>";
}
echo "<br>";
echo "classmates in the array: ";
echo count($classmates);
echo "<br>";
echo "<br>";

echo "Printing the array in a cool way";
echo "<pre>";
print_r($classmates);
echo "</pre>";
echo "<br>";

//adding an element to the array
$newElement = "Adam";
$classmates[] = $newElement;
echo "<br>";
echo "<pre>";
print_r($classmates);
echo "</pre>";
echo "<br>";

//array push with multiple elements
$newElement = "Thomas";
array_push($classmates, $newElement, "Giulio");
echo "<br>";
echo "<pre>";
print_r($classmates);
echo "</pre>";
echo "<br>";

//You can also set custom keys to the array to allow you to access them better
$cars = [
    "BMW" => 230,
    "Ferrari" => 300,
    "Lamborghini" => 400,
    "Bugatti" => 500,
    "Chevrolet" => 100
];

echo "<br>";
echo "<pre>";
print_r($cars);
echo "</pre>";
echo "<br>";

//accessing with a specific key
echo $cars["BMW"];



?>
