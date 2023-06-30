<?php

$plik_z_danymi = 'person.csv';
$separator = ',';

//
if (false === file_exists($plik_z_danymi)) {
    echo 'Plik z danymi nie istnieje!' . PHP_EOL;
    exit(1);
}


//
if (false === is_readable($plik_z_danymi)) {
    echo 'Plik nie jest do odczytu!' . PHP_EOL;
    exit(2);
}


//
if (false === ($handle = fopen($plik_z_danymi, 'r'))) {
    echo 'Nie moge utworzyc wskaznika do pliku z danymi!' . PHP_EOL;
    exit(3);
}


//
$employees = array();

while (false !== ($employee_details = fgetcsv($handle, 1000, $separator))) {
    $employees[$employee_details[0]] = array(
        //'id' => $employee_details[0],
        'name' => $employee_details[1],
        'last_name' => $employee_details[2],
        'phone_number' => $employee_details[3],
        'email' => $employee_details[4],
        'position' => $employee_details[5]
    );
}
fclose($handle);

//print_r($employees);