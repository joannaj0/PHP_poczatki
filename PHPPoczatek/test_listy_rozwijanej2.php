<?php
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
    25
);


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
            <option value="">-- Wybierz czcionke--</option>
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
        <select name="id" onchange="this.form.submit()">
            <option value="">-- Wybierz osobę --</option>
            <?php
            foreach ($employees as $employee) {
                $selected = '';
                if ($_GET['id'] === $employee['id']) {
                    $selected = ' selected';
                }
                echo "<option{$selected} value={$employee['id']}>" . $employee['name'] . ' ' . $employee['last_name'] . "</option>" . PHP_EOL;
            }
            ?>
        </select>
        <br></br>
        <b>STOPKA</b>
        <?php
        if ('test_listy_rozwijanej2.php' !== substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))) {

            $fontfamily = '';
            $fontsize = '';
            foreach ($tablica_czcionek as $key => $czcionka) {
                if ($_GET['czcionka_id'] === strval($key)) {
                    $fontfamily = '"font-family: ' . $czcionka;
                }
            }

            foreach ($tablica_romiarow as $key => $rozmiar) {
                if ($_GET['rozmiar_id'] === strval($key)) {
                    $fontsize = "font-size: {$rozmiar}px";
                }
            }

            echo '<p style=' . $fontfamily . ';' . $fontsize . ';">';


            foreach ($employees as $employee) {
                if ($employee['id'] === $_GET['id']) {
                    echo '<br/> Z poważaniem <br/>' . $employee['position'] . '<br/>' . $employee['name'] . ' ' . $employee['last_name'] . '<br/>' . $employee['email'] . '<br/>' . $employee['phone_number'] . '<br/> <br/>';
                }
            }
        }
        ?>
    </form>
    </p>
</body>

</html>