<?php
header('Content-Type: text/html; charset=utf-8');

require 'przygotuj_dane.php';


?>

<!Doctype Html>
<html>

<head>
    <met charset="utf-8" />
    <title>WYBÓR OSOBY</title>
</head>

<body>
    <h1>
        <?php echo "WYBÓR OSOBY" ?>
    </h1>
    <p>
    <form action="twoja_stopka.php" method="GET">
        <select name="dane_osoby">
            <option
                value="<?php echo $employees[0]['name'] . ' ' . $employees[0]['last_name'] . ' ' . $employees[0]['phone_number'] . ' ' . $employees[0]['email'] . ' --> ' . $employees[0]['position']; ?>">
                <?php echo $employees[0]['name'] . ' ' . $employees[0]['last_name'] . ' ' . $employees[0]['phone_number'] . ' ' . $employees[0]['email'] . ' --> ' . $employees[0]['position']; ?>
            </option>
            <option
                value="<?php echo $employees[1]['name'] . ' ' . $employees[1]['last_name'] . ' ' . $employees[1]['phone_number'] . ' ' . $employees[1]['email'] . ' --> ' . $employees[1]['position']; ?>">
                <?php echo $employees[1]['name'] . ' ' . $employees[1]['last_name'] . ' ' . $employees[1]['phone_number'] . ' ' . $employees[1]['email'] . ' --> ' . $employees[1]['position']; ?>
            </option>
            <option
                value="<?php echo $employees[2]['name'] . ' ' . $employees[2]['last_name'] . ' ' . $employees[2]['phone_number'] . ' ' . $employees[2]['email'] . ' --> ' . $employees[2]['position']; ?>">
                <?php echo $employees[2]['name'] . ' ' . $employees[2]['last_name'] . ' ' . $employees[2]['phone_number'] . ' ' . $employees[2]['email'] . ' --> ' . $employees[2]['position']; ?>
            </option>
            <option
                value="<?php echo $employees[3]['name'] . ' ' . $employees[3]['last_name'] . ' ' . $employees[3]['phone_number'] . ' ' . $employees[3]['email'] . ' --> ' . $employees[3]['position']; ?>">
                <?php echo $employees[3]['name'] . ' ' . $employees[3]['last_name'] . ' ' . $employees[3]['phone_number'] . ' ' . $employees[3]['email'] . ' --> ' . $employees[3]['position']; ?>
            </option>
            <option
                value="<?php echo $employees[4]['name'] . ' ' . $employees[4]['last_name'] . ' ' . $employees[4]['phone_number'] . ' ' . $employees[4]['email'] . ' --> ' . $employees[4]['position']; ?>">
                <?php echo $employees[4]['name'] . ' ' . $employees[4]['last_name'] . ' ' . $employees[4]['phone_number'] . ' ' . $employees[4]['email'] . ' --> ' . $employees[4]['position']; ?>
            </option>
        </select>
        <br></br>
        <input type=submit value="Przygotuj stopkę" />
        <!-- Imię: <input type=text name='imie"' /><br /> -->
        <!--Nazwisko: <input type=text name="nazwisko" /><br /> -->
        <!--<input type=submit value="Wyślij" /> -->
        <!--<pre>-->
        <!--<?php print_r($employees); ?>-->
        <!--</pre>-->
        </p>
</body>

</html>