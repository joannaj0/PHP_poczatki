<?php
error_reporting(E_ALL);
ini_set('display.errors', 'On');
header('Content-Type: text/html; charset=utf-8');

require 'przygotuj_dane.php';

$tablica_stylow = array(
    1 => 'Styl 1',
    2 => 'Styl 2'
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
    <b>WYBÓR STYLU </b>
    <p>
    <form action="test_listy_rozwijanej3.php" method="GET">

        <select name="styl_id" onchange="this.form.submit()">
            <option value="">-- Wybierz styl --</option>

            <?php
            foreach ($tablica_stylow as $key => $styl) {
                $selected = '';
                if ($_GET['styl_id'] === strval($key)) {
                    $selected = ' selected';

                }

                echo "<option{$selected} value=$key>" . $styl . $domyslny . "</option>" . PHP_EOL;
            }
            ?>

        </select>
        <br></br>
        <b>WYBÓR OSOBY </b>
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
        $employee = $employees[$_GET['osoba_id']];
        $imie = $employee['name'];
        $nazwisko = $employee['last_name'];
        $numer = $employee['phone_number'];
        $mail = $employee['email'];
        $stanowisko = $employee['position'];
        ?>

        <?php
        if (($_GET['osoba_id'] === '') || (!isset($_GET['osoba_id']))) {
            $disabled = ' disabled';
            echo '<br></br>';
        } else {
            $disabled = '';
            echo '<div id="footer">';
            if (($_GET['styl_id'] === '1') || ($_GET['styl_id'] === '') || (!isset($_GET['styl_id']))) {
                require 'stopka2.php';
            } else {
                require 'stopka3.php';
            }
            echo '</div>';
        }
        ?>

        <button id="buttonSkopiuj" onclick="Skopiuj()" <?php echo $disabled; ?>>Skopiuj</button>
        <script>
            function Skopiuj() {
                var r = document.createRange();
                r.selectNode(document.getElementById("footer"));
                stopka = document.getElementById("footer");
                //alert(stopka.innerHTML)
                window.getSelection().removeAllRanges();
                window.getSelection().addRange(r);
                document.execCommand('copy');
                window.getSelection().removeAllRanges();
            }
        </script>
    </form>
    </p>
</body>

</html>