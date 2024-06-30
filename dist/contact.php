<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="contact.html">

    <link rel="apple-touch-icon" sizes="180x180" href="afbeeldingen/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="afbeeldingen/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="afbeeldingen/favicon/favicon-16x16.png">
    <link rel="manifest" href="afbeeldingen/favicon/site.webmanifest">
    <link rel="mask-icon" href="afbeeldingen/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <title>Document</title>
</head>
<body>
<header>
    <!--        <h1>Sass - Bootstrap 4-->
    <!--            <small class="text-muted">project 1ITF</small>-->
    <!--        </h1>-->
    <!--        <hr class="mb-4">-->

    <nav class="navbar navbar-expand-lg navbar-light bg-nav_blue">
        <a class="navbar-brand" href="index.html"><img src="afbeeldingen/logo.png" alt="logo" class="logo" height="100%" width="100%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <!--                <li class="nav-item active">-->
                <!--                    <a class="nav-link" href="index.html">Homepage <span class="sr-only">(current)</span></a>-->
                <!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="staycation1.html">Stay 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="staycation2.html">Stay 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="staycation3.html">Stay 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="examen.html">Examen</a>
                </li>
            </ul>
        </div>
    </nav>
</header>



<?php
if (isset($_POST["gebruikersnaam"]) && $_POST["gebruikersnaam"] != "") {
    echo "<p> Ingevuld bij naam: " . $_POST["gebruikersnaam"] . "</p>\n";
} else {
    echo "<p> Gebruikersnaam werd niet ingevuld </p>\n";
}

if (isset($_POST["email"]) && $_POST["email"] != "") {
    echo "<p> Ingevuld bij e-mail: " . $_POST["email"] . "</p>\n";
} else {
    echo "<p> E-mail werd niet ingevuld </p>\n";
}

if (isset($_POST["tel"]) && $_POST["tel"] != "") {
    echo "<p> Ingevuld bij eigen telefoonnummer: " . $_POST["tel"] . "</p>\n";
} else {
    echo "<p> Telefoonnummer werd niet ingevuld </p>\n";
}

//if (isset($_POST["gemeente"]) && $_POST["gemeente"] != "") {
//    echo "<p> Ingevuld bij gemeente: " . $_POST["gemeente"] . "</p>\n";
//} else {
//    echo "<p> Gemeente werd niet ingevuld </p>\n";
//}

if (isset($_POST["opmerking"]) && $_POST["opmerking"] != "") {
    echo "<p> Ingevuld bij opmerkingen: " . $_POST["opmerking"] . "</p>\n";
} else {
    echo "<p> Er werd geen vraag gesteld </p>\n";
}
?>


<footer class="py-3">
    <div class="small text-center mt-3">
        <a href="https://www.thomasmore.be/" class="pl-2 pr-2"><span><i class="fas fa-building"></i> Thomas More</span></a>
        <a href="https://venlomj.sinners.be/html5/Uidaging_2/index.html" class="pl-2 pr-2"> <span><i class="fab fa-phoenix-framework"></i> it's Lego time</span></a>
        <a href="https://venlomj.sinners.be/index_wb.html" class="pl-2 pr-2"> <span><i class="fab fa-phoenix-framework"></i> Fawn-Tech</span></a>
    </div>
    <p id="author" class="text-center">Eindverantwoordelijke = Murrel Venlo </p>
</footer>

</body>
</html>
