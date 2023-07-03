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
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>WYBÓR OSOBY</title>

    <style>
        li.menu {
            display: inline;
        }

        li.menu a {
            background-image: url(tab.gif);
            width: 138px;
            text-align: center;
            color: #2c2c2c;
            text-decoration: none;
            border-bottom: 1px black solid;
            float: left;
        }

        li.menu a:hover {
            background-image: url(tabhover.gif);
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="http://localhost/test_listy_rozwijanej3.php" class="nav-link px-2">Tworzenie
                        stopki</a></li>
                <li><a href="http://localhost/formularz.php" class="nav-link px-2 link-secondary">Wysyłanie
                        formularza</a></li>
            </ul>

        </header>
        <br><br>

        <h1>TWORZENIE STOPKI </h1>
        <b>WYBÓR STYLU </b>
        <p>
        <form action="test_listy_rozwijanej3_stary.php" method="GET">

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
            </p>
    </div>
</body>

</html>