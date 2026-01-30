<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./styles/home.css">
  <link rel="icon" type="image/x-icon" href="./images/logo.png">
</head>

<body>

<!-- NAVBAR -->
<?php
include("./header.php");
?>

<!-- HERO -->
<section class="hero d-flex align-items-center position-relative">
  <img src="./images/headercard.png" alt="Hero" class="position-absolute w-100 h-100">
  <div class="hero-overlay position-absolute w-100 h-100"></div>
  <div class="container hero-content text-white position-relative">
    <h1 class="fw-bold text-dark">Welkom op ons platform</h1>
    <button class="btn btn-light mt-3">Ontdek onze projecten</button>
  </div>
</section>

<!-- CARDS -->
<section class="bg-mustard py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Onze Projecten</h2>
    <p class="text-center mb-5">Ontdek inspirerende fotografieprojecten die je kunt steunen. Samen leggen we bijzondere verhalen en momenten vast.</p>
    <div class="row text-center g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <img src="./images/fotografie.png" class="card-img-top" alt="afbeelding van een fotograaf aan het werk in een studio">
          <div class="card-body">
            <h5 class="card-title">Documentaire Fotografie</h5>
            <p class="card-text">Steun projecten die maatschappelijke thema’s en bijzondere verhalen in beeld brengen door de lens van getalenteerde fotografen.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <img src="./images/camera.png" class="card-img-top" alt="afbeelding van een camera in de natuur">
          <div class="card-body">
            <h5 class="card-title">Natuurfotografie</h5>
            <p class="card-text">Help fotografen unieke beelden van flora en fauna vastleggen en aandacht vragen voor natuurbehoud.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <img src="./images/cameraset.png" class="card-img-top" alt="afbeelding van een set camera's en opnameapparatuur">
          <div class="card-body">
            <h5 class="card-title">Fotografie Apparatuur</h5>
            <p class="card-text">Draag bij aan de aanschaf van professionele camera’s en accessoires voor ambitieuze fotografen en projecten.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="card h-100">
          <img src="./images/student.png" class="card-img-top" alt="afbeelding van een student die fotografie studeert">
          <div class="card-body">
            <h5 class="card-title">Fotografie Educatie</h5>
            <p class="card-text">Geef jonge talenten de kans om zich te ontwikkelen via workshops, cursussen en educatieve fotografieprojecten.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Subscribe SECTION -->
<section class="py-5 bg-mustard">
  <div class="container bg-light-green rounded p-4 shadow-sm">
    <h3 class="text-center fw-bold mb-4">Blijf betrokken bij onze actie</h3>
    <form id="newsletterForm" class="row g-3 align-items-center">
      <div class="col-md-4">
        <input type="text" name="name" class="form-control" placeholder="Naam" required>
      </div>
      <div class="col-md-4">
        <input type="email" name="email" class="form-control" placeholder="E-mailadres" required>
      </div>
      <div class="col-md-3">
        <select name="type" class="form-select">
          <option value="updates" selected>Ik wil updates ontvangen</option>
          <option value="no-updates">Ik wil geen updates ontvangen</option>
        </select>
      </div>
      <div class="col-md-1 text-center">
        <button type="submit" style="background: none; border: none; padding: 0;">
          <img src="./images/send-button.png" alt="Verzenden" style="width: 40px; height: auto; cursor: pointer;">
        </button>
      </div>
    </form>
    <div id="formMessage" class="mt-3 text-center" style="display: none; font-weight: bold;"></div>
  </div>
</section>

<!-- FOOTER -->
<footer class="text-white py-4 footer-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold mb-2">Over ons</h5>
        <p class="small mb-0">Ondersteun creatieve projecten en innovatieve ideeën via community-financiering.</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5 class="fw-bold mb-2">Contact</h5>
        <p class="small mb-1 text-white-75">Email: <a href="mailto:crowdfunding@gmail.com" class="text-white text-decoration-none">crowdfunding@gmail.com</a></p>
        <p class="small mb-0 text-white-75">Phone: +1 (555) 123-4567</p>
      </div>
    </div>
    <div class="text-center text-white-75 mt-3">
      <p class="small mb-0">&copy; 2026 Crowdfunding Platform. All rights reserved.</p>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="./js/home.js"></script>

</body>
</html>
