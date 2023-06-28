<?php
//$imie = "Joanna";

$t = array();
$t2 = array();
$t3 = array();

$j = 0;
for ($i = 0; $i < 11; $i++) {
    if ($i % 2 == 0) {
        //continue;
        echo $i . PHP_EOL;
        $t[$j] = $i;
        $t2[] = $i;
        $j++;
    }

    if ($i == 1) {
        echo $i . ' To jest jedynka, ktora nie jest parzysta' . PHP_EOL;
    }
    //echo $i." ".$imie."\n";
    //echo '$i $imie \n' . PHP_EOL;    //PHP_EOL - nowy wiersz
}

echo /*count($t) .*/' ---- ' . PHP_EOL;

for ($i = 0; $i < count($t); $i++) {
    echo $t[$i] . PHP_EOL;
}

echo /*count($t) .*/' - tutaj --- ' . PHP_EOL;
array_unshift($t, 20, 21);
array_pop($t);
foreach ($t as $tt) {
    echo $tt . PHP_EOL;
}

echo /*count($t) .*/' ---- ' . PHP_EOL;

print_r($t);
print_r($t2);

$t3['imie'] = 'Joanna';
$t3['nazwisko'] = 'Jelito';

print_r($t3);


echo /*count($t) .*/' ---- ' . PHP_EOL;

foreach ($t3 as $key => $tt) {
    echo $key . ' ' . $tt . PHP_EOL;
}

//$zmienna = '1';

//if ($zmienna === 1)
//{
//    echo $zmienna . ' To jest jedynka, ktora nie jest parzysta' . PHP_EOL;
//}

echo ' --tablica dwuwymiarowa-- ' . PHP_EOL;

$tablica_dwuwymiarowa = array();
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $tablica_dwuwymiarowa[$i][$j] = $i . '-' . $j;
    }
}

print_r($tablica_dwuwymiarowa);

echo ' ---- ' . PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo $tablica_dwuwymiarowa[$i][$j] . ' ';
    }
    echo PHP_EOL;
}
echo PHP_EOL;
echo $tablica_dwuwymiarowa[4][5] . PHP_EOL;

echo ' -- tablica osoby -- ' . PHP_EOL;

$tablica_osoby = array(
    "numer" => array(1, 2, 3),
    "imie" => array("1" => "Joanna", "2" => "Alicja", "3" => "Agata"),
    "nazwisko" => array("1" => "Jo", "2" => "Fo", "3" => "Fi")
);

print_r($tablica_osoby);

echo ' ---- ' . PHP_EOL;

foreach ($tablica_osoby as $key => $numer) {
    echo $key . ' ' . $numer . ' ';
}

echo ' --aktualne-- ' . PHP_EOL;

$tablica_osoby2 = array(
    "1" => array("imie" => "Alicja", "nazwisko" => "Fo", "numer_telefonu" => "000000000"),
    "2" => array("imie" => "Joanna", "nazwisko" => "Je", "numer_telefonu" => "111111111"),
    "3" => array("imie" => "Agata", "nazwisko" => "Fi", "numer_telefonu" => "222222222")
);

print_r($tablica_osoby2);

foreach ($tablica_osoby2 as $var) {
    echo PHP_EOL . $var['imie'] . ' ' . $var['nazwisko'] . ' ' . $var['numer_telefonu'];
}

echo PHP_EOL . ' ---- ' . PHP_EOL;
//echo $tablica_osoby2['2']['imie']['nazwisko']['numer_telefonu'];
$test = "xxx";
var_dump($tablica_osoby2);

echo PHP_EOL . ' ---- ' . PHP_EOL;
var_dump($tablica_osoby2['1']);
echo $tablica_osoby2['1']['imie'] . ' ' . $tablica_osoby2[1]['nazwisko'] . ' ' . $tablica_osoby2[1]['numer_telefonu'];


echo PHP_EOL . ' ---- ' . PHP_EOL;

echo PHP_EOL . ' --pozycja-- ' . PHP_EOL;

$tekst = 'abc';
$wzorzec = 'a';
$pos = strpos($tekst, $wzorzec);
echo ' ____ ' . PHP_EOL;
echo $pos;
echo ' ____ ' . PHP_EOL;
if ($pos == false) {
    echo '$pos == false' . PHP_EOL;
}
if ($pos === false) {
    echo '$pos === false' . PHP_EOL;
}
if ($pos == 0) {
    echo '$pos == 0' . PHP_EOL;
}
if ($pos === 0) {
    echo '$pos === 0' . PHP_EOL;
}

if (2 === '2') {
    echo 'ok';
}
echo PHP_EOL;