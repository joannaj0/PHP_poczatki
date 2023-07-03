<?php
require 'mime_content_type.php';
?>

<div id="stopka" style="background-color: white;">
    <p style="font-family: Georgia; font-size: 15px;">
        Z poważaniem
        <br><strong>
            <?= $imie ?>
            <?= $nazwisko ?>
        </strong></br>
        <strong>
            <?= $stanowisko ?>
        </strong>
        <br>
        <?= $numer ?></br>
        <?= $mail ?>
        <br></br>

        <?php
        $img = 'logo4.png';
        $src = 'data:' . mime_content_type($img) . ';base64,' . base64_encode(file_get_contents($img));
        echo '<img src="' . $src . '" border="0" width="50" height="50" style="float: left">';
        ?>

        <br></br>
        <br>ul.Opolska 1, 45-300 Opole</br>
        <br><a href="https://www.facebook.com/">Facebook</a>
    </p>
</div>