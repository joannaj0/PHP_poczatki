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
                <li><a href="/test_listy_rozwijanej3.php" class="nav-link px-2 link-secondary">Tworzenie
                        stopki</a></li>
                <li><a href="/formularz.php" class="nav-link px-2">Wysyłanie
                        formularza</a></li>
            </ul>
        </header>

        <br></br>
        </form>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Wysyłanie formularza</h4>
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="do" class="form-label">Do</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                        <div class="invalid-feedback">
                            Wymagany jest adresat.
                        </div>


                        <div class="col-12">
                            <label for="wiadomosc" class="form-label">Wiadomość</label>
                            <input type="text" class="form-control" id="wiadomosc" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Wymagany jest przynamniej jeden znak.
                            </div>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary d-inline-flex align-items-center" type="submit">
                            Wyślij
                            <svg class="bi ms-1" width="0" height="20">
                                <use xlink:href="#arrow-right-short" />
                            </svg>
                        </button>
                    </div>
            </form>
            </p>
        </div>
</body>

</html>