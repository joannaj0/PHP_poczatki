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
    <h1>WYBÓR OSOBY</h1>
    <p>
    <form action="test_listy_rozwijanej2.php" method="GET">
        <select name="id" onchange="this.form.submit()">
            <option value="">-- Wybierz pracownika --</option>
            <?php
            foreach ($employees as $employee) {
                $selected = '';
                if($_GET['id'] === $employee['id'])
                {
                    $selected = ' selected';
                }
                echo "<option{$selected} value={$employee['id']}>".$employee['name'] . ' ' . $employee['last_name'] . "</option>" . PHP_EOL;
            }
            ?>
        </select>
    </form>
    </p>
</body>

</html>