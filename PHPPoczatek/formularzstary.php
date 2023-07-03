<!Doctype Html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta charset="utf-8" />
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
                <li><a href="http://localhost/test_listy_rozwijanej3.php" class="nav-link px-2 link-secondary">Tworzenie
                        stopki</a></li>
                <li><a href="http://localhost/formularz.php" class="nav-link px-2">Wysyłanie
                        formularza</a></li>
            </ul>
        </header>

        <br></br>
        </form>
        <h1>WYSYŁANIE FORMULARZA</h1>
        <form action="podsumowaine.php" method="post">
            Do:
            <br><input type="text" name="do" /><br>
            Wiadomość:
            <br><input type="text" value="Tu bedzie stopka" name="wiadomosc" style="height:400px;" /></br>
            <input type="submit" value="Wyślij" />
        </form>
        </p>
    </div>
</body>

</html>