<?php
error_reporting(E_ALL);
ini_set('display.errors','On');
header('Content-Type: text/html; charset=utf-8');

require 'przygotuj_dane.php';


$tablica_czcionek = array(
    1 => 'Arial',
    2 => 'Georgia',
    3 => 'Verdana',
    4 => "'Times New Roman'"
);

$tablica_romiarow = array(
    8,
    9,
    10,
    11,
    12,
    13,
    14,
    15,
    16,
    17,
    18,
    19,
    20,
    21,
    22,
    23,
    24,
    25,
    26,
    27,
    28,
    29,
    30
);

$defaultfontfamily = 'Arial';
$defaultfontsize = 20;

?>

<!Doctype Html>
<html>

<head>
    <met charset="utf-8" />
    <title>WYBÓR OSOBY</title>
</head>

<body>
    <h1>TWORZENIE STOPKI </h1>
    <b>WYBÓR OSOBY I CZCIONKI</b>
    <p>
    <form action="test_listy_rozwijanej2.php" method="GET">
        <select name="czcionka_id" onchange="this.form.submit()">
            <option value="">-- Wybierz czcionkę--</option>
            <?php
            foreach ($tablica_czcionek as $key => $czcionka) {
                $selected = '';
                if ($_GET['czcionka_id'] === strval($key)) {
                    $selected = ' selected';
                }
                echo "<option{$selected} value=$key>" . str_replace("'", '', $czcionka) . "</option>" . PHP_EOL;
            }
            ?>
        </select>
        <br></br>
        <select name="rozmiar_id" onchange="this.form.submit()">
            <option value="">-- Wybierz rozmiar czcionki--</option>
            <?php
            foreach ($tablica_romiarow as $key => $rozmiar) {
                $selected = '';
                if ($_GET['rozmiar_id'] === strval($key)) {
                    $selected = ' selected';
                }
                echo "<option{$selected} value=$key>" . $rozmiar . "</option>" . PHP_EOL;
            }
            ?>
        </select>
        <br></br>
        <select name="osoba_id" onchange="this.form.submit()">
            <option value="">-- Wybierz osobę --</option>
            <?php
            foreach ($employees as $id => $employee) {
                $selected = '';
                if ($_GET['osoba_id'] === strval($id)) {
                    $selected = ' selected';
                }
                echo "<option{$selected} value={$id}>" . $employee['name'] . ' ' . $employee['last_name'] . "</option>" . PHP_EOL;
            }
            ?>
        </select>
        <br></br>
        <b>STOPKA</b>
        <?php

        //if ('test_listy_rozwijanej2.php' !== substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))) {
        if($_GET['id'] !== ''){
            if (array_key_exists(intval($_GET['czcionka_id']), $tablica_czcionek)) {
                $fontfamily = '"font-family: ' . $tablica_czcionek[intval($_GET['czcionka_id'])];
            } else {
                $fontfamily = '"font-family: ' . $defaultfontfamily;
            }

            if (array_key_exists($_GET['rozmiar_id'], $tablica_romiarow)) {
                $fontsize = 'font-size: ' . $tablica_romiarow[intval($_GET['rozmiar_id'])] . 'px';
            } else {
                $fontsize = 'font-size: ' . $defaultfontsize;
            }

            echo '<p style=' . $fontfamily . ';' . $fontsize . ';">';

            if (array_key_exists($_GET['osoba_id'], $employees)) {
                echo '<br/> Z poważaniem <br/>' . $employees[$_GET['osoba_id']]['position'] . '<br/>' . $employees[$_GET['osoba_id']]['name'] . ' ' . $employees[$_GET['osoba_id']]['last_name'] . '<br/>' . $employees[$_GET['osoba_id']]['email'] . '<br/>' . $employees[$_GET['osoba_id']]['phone_number'] . '<br/> <br/>';
            } else {
                echo '';
            }
        }
        ?>
    </form>
    </p>
</body>

</html>