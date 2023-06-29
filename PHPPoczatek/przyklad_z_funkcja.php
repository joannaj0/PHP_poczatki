<?php

$plik_z_danymi = 'person.csv';
$separator = ',';

function zatrzymaj_program($komunikat, $kod_bledu){
    echo $komunikat . PHP_EOL;
    exit($kod_bledu);
}

//
if (false === file_exists($plik_z_danymi)) {
    zatrzymaj_program('Plik z danymi nie istnieje!',1);
}


//
if (false === is_readable($plik_z_danymi)) {
    zatrzymaj_program('Plik nie jest do odczytu!',2);
}


//
if (false === ($handle = fopen($plik_z_danymi, 'r'))) {
    zatrzymaj_program('Nie moge utworzyc wskaznika do pliku z danymi!',3);
}


//
$employees = array();

while (false !== ($employee_details = fgetcsv($handle, 1000, $separator))) {
    $employees[] = array(
        'name' => $employee_details[0],
        'last_name' => $employee_details[1],
        'phone_number' => $employee_details[2],
        'email' => $employee_details[3],
        'position' => $employee_details[4]
    );
}
fclose($handle);


print_r($employees);