<?php
require_once "autoload.php";

$people = [
    new Citizen("Mark", 16, "Amsterdam"),
    new Human("Yana", 38),
    new Student("Igor", 17, "Kharkiv", 10, "Kit School"),
    new Employee("Bohdan", 20, "USA", "Apple", "Senior"),
    new Citizen("Alex", 18, "Kiev"),
];

foreach ($people as $human) {
    if ($human instanceof Human) {
        echo $human->get_info()."\n";
    }
}