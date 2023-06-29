<?php

echo PHP_EOL;
echo ' --- WYPISYWANIE DANYCH Z PLIKU DO TABLICY ASOSJACYJNEJ .csv --- ' . PHP_EOL;

$employees = array();
$number=0;
if (($handle = fopen("person.csv", "r")) !== FALSE) {
    while (($employee_details = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $employees[$number] = array("name" => $employee_details[0], "last_name" => $employee_details[1], "phone_number" => "$employee_details[2]", "email" => "$employee_details[3]", "position" => "$employee_details[4]");
            $number++;
    }
    fclose($handle);
}

print_r($employees);
