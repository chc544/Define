<!DOCTYPE html>
<html lang="da" class="h-100">
<head>
    <meta charset="utf-8">

    <title>Define Kontakt</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/kontakt.css" rel="stylesheet" type="text/css">
    <link href="css/menufooter.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/627f0b1d73.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/gsh6skh.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="d-flex flex-column h-100">

<?php include 'includes/menu.php';?>

<section class="kontakt container mt-5">
    <h1 class="kontakt__header mb-5 d-flex justify-content-center">Kontakt</h1>

    <div class="kontakt__content row gap-4">

        <div class="kontakt__left-col col-md-6 me-md-3">
            <div class="form-group my-3">
                <label for="besked" class="mb-1 fs-4">Besked:</label>
                <textarea name="besked" id="besked" placeholder="Hvad kan vi hjælpe med?" rows="5" class="kontakt__besked form-control bg-light-gray"></textarea>
            </div>
            <div class="form-group my-3">
                <label for="navn" class="mb-1 fs-4">Navn:</label>
                <input type="text" id="navn" placeholder="Indtast navn" class="kontakt__navn form-control bg-light-gray">
            </div>
            <div class="form-group my-3">
                <label for="email" class="mb-1 fs-4">Email:</label>
                <input type="email" id="email" placeholder="Indtast email" class="kontakt__mail form-control bg-light-gray">
            </div>

            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><p class="button__text">Send</p></button>
        </div>
        <div class="kontakt__right-col col-md-5 pt-5">
            <div class="kontakt__telefon d-flex align-items-center">
                <a href="tel:12345678">
                <div class="kontakt__telefon-ikon fa-stack fa-lg my-2 me-3">
                    <i class="fas fa-circle fa-stack-2x text-primary m-0"></i>
                    <i class="fas fa-phone fa-stack-1x fa-sm fa-inverse m-0"></i>
                </div>
                </a>
                <h3 class="kontakt__telefon-nummer fw-bold">+45 1234 5678</h3>
            </div>

            <div class="kontakt__email d-flex align-items-center">
                <a href="mailto:kontakt@define.dk">
                <div class="kontakt__telefon-ikon fa-stack fa-lg my-2 me-3">
                    <i class="fas fa-circle fa-stack-2x text-primary m-0"></i>
                    <i class="fas fa-envelope fa-stack-1x fa-sm fa-inverse m-0"></i>
                </div>
                </a>
                <h3 class="kontakt__telefon-nummer fw-bold">kontakt@define.dk</h3>
            </div>
            <div class="map-responive pe-5 py-5 d-none d-xl-block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18410.89751107352!2d11.849499440517985!3d54.773600039370365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad30fee6c73863%3A0xcbdeb140b0876cc!2sSlotsbryggen%2C%204800%20Nyk%C3%B8bing%20Falster!5e0!3m2!1sen!2sdk!4v1634202942912!5m2!1sen!2sdk" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <div class="kontakt__map d-xl-none">
        <div class="kontakt__map__container map-responsive mt-4 mb-5 px-md-5">
            <h2 class="text-center mt-4 mb-3">Her befinder vi os!</h2>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18410.89751107352!2d11.849499440517985!3d54.773600039370365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad30fee6c73863%3A0xcbdeb140b0876cc!2sSlotsbryggen%2C%204800%20Nyk%C3%B8bing%20Falster!5e0!3m2!1sen!2sdk!4v1634202942912!5m2!1sen!2sdk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

</section>

<?php include 'includes/bottom.php';?>
