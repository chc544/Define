<!DOCTYPE html>
<html lang="da" class="h-100" style="scroll-behavior: smooth">
<head>
    <meta charset="utf-8">

    <title>Define Forside</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/627f0b1d73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="css/menufooter.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.typekit.net/gsh6skh.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="d-flex flex-column h-100">

<section class="container-fluid hero__section">
    <?php include 'includes/menu.php';?>
    <div class="container hero__text">
        <h1 class="display-4 fw-bold lh-1 mb-3 hero__header__text"><p>Vi sælger ikke <br><span id="spin"></span></p></h1>
        <div class="button__container">
        <a href="kompetencer.php" class="text-decoration-none"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2 mt-3 d-block"><p class="button__text">Vi sælger digitale løsninger</p></button></a>
            <div class="arrow-container">
                <a href="#icons__top"><div class="arrow-down"></div></a>
            </div>
        </div>
    </div>
</section>


    <div class="container-fluid icons__top pb-4" id="icons__top">
        
        <h1 class="icon__text icon__header__text mb-5 mt-5 p-5">Hvad vi kan gøre for dig</h1>
        <div class="row mt-5 me-5 ms-5 mb-3">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center d-flex align-items-center flex-column">
                <img src="img/webdesign.svg" style="height: 180px;">
                <h1 class="icon__text">Webdesign</h1>
                <p class="text__color fs-5 w-75">Mindre landing pages, webshops og corporate sites - Vi udvikler en skræddersyet oplevelse til dine brugeres behov.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-center d-flex align-items-center flex-column middle__icon">
                <img src="img/grafiskdesign.svg" style="height: 180px;">
                <h1 class="icon__text">Grafisk design</h1>
                <p class="text__color fs-5 w-75">Vi laver design med et formål; at skabe værdi for jeres virksomhed og begejstrer dine brugere.</p>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 col-sm-12 mt-md-5 mt-lg-0 text-center d-flex align-items-center flex-column">
                <img src="img/some.svg" style="height: 180px;">
                <h1 class="icon__text">SoMe indhold</h1>
                <p class="text__color fs-5 w-75 ">Sociale medier er et afgørende komponent, når marketingstrategien skal udarbejdes, og det kan vi hjælpe med.</p>
            </div>
        </div>
    </div>
        <img src="img/bg2.svg" class="img-fluid m-0" alt="">


<div class="space__divider"></div>

    <div class="container">
        <div class="row">
            <h1 class="mb-4 mt-4 display-5 text__weight col-lg-6 offset-lg-2">Digitale løsninger til en digital tidsalder.</h1>
            <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1 col-sm-12 offset-sm-0">
                <img src="img/flat%20art.jpg" class="flat__art__small" alt="">
                <p class="mb-4 fs-5">Vi er et team af kreative fagnørder med forskellige kompetencer og personligheder. Vi er stolte af det! Her hos Define skaber vi løsninger der virker, både nu og i fremtiden.</p>
                <a href="omos.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><p class="button__text">Læs om os</p></button></a>
            </div>
            <div class="col-lg-4 col-md-5 flat__art__big justify-content-start">
                <img src="img/flat%20art.jpg" alt="" >
            </div>
        </div>
    </div>

    <div class="space__divider"></div>
    <div class="space__divider"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-3 text-md-center col-sm-12 offset-sm-0">
                <h1 class="mb-4 display-5 text__weight">Kontakt</h1>
                <p class="mb-4 fs-5">Skal vi hjælpe din virksomhed til næste niveau, så kontakt os direkte på telefon eller email, så tager vi en uforpligtende snak omkring dit næste projekt.</p>
                <a href="kontakt.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><p class="button__text">Kontakt</p></button></a>
            </div>
        </div>
    </div>

    <div class="space__divider"></div>

<?php include 'includes/bottom.php';?>