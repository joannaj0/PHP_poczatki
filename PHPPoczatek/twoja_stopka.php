<?php
header('Content-Type: text/html; charset=utf-8');

require 'przygotuj_dane.php';


?>

<!Doctype Html>
<html>

<head>
    <met charset="utf-8" />
    <title>GOTOWA STOPKA</title>
</head>

<body>
    <h1>
        <?php echo "GOTOWA STOPKA" ?>
    </h1>
    <p>
    <!--Imię: <?php echo $_GET['imie']?><br>-->
 <!-- Nazwisko: <?php echo $_GET['nazwisko']?><br>-->
 <?php echo $_GET['dane_osoby']?>
    </p>
</body>

</html>