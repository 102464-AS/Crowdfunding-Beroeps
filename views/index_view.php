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
    <h1 class="fw-bold text-dark">Steun de expositie van GLR Fotografen</h1>
  </div>
</section>

<!-- CARDS -->
<section class="bg-mustard py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Onze Projecten</h2>

    <div class="row justify-content-center text-center g-4">

      <!-- Card 1 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card project-card h-100 border-0">
          <div class="project-top">
            <img src="./images/mijn-stad-in-beeld.png" alt="fotograaf aan het werk" class="project-img">
            <div class="project-user">
              <img src="./images/person-1.jpg" alt="Profielfoto van student" class="avatar">
              <span class="user-name">Samira Jansen</span>
            </div>
          </div>

          <div class="card-body card-body-custom d-flex flex-column align-items-center">
            <h5 class="card-title">Mijn Stad in Beeld</h5>
            <a href="./donatie.php?work_id=1" class="btn btn-primary mt-3">Steun dit project</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card project-card h-100 border-0">
          <div class="project-top">
            <img src="./images/camera.png" alt="camera in de natuur" class="project-img">
            <div class="project-user">
              <img src="./images/person-2.png" alt="Profielfoto van student" class="avatar">
              <span class="user-name">Lucas Vermeer</span>
            </div>
          </div>

          <div class="card-body card-body-custom d-flex flex-column align-items-center">
            <h5 class="card-title">Natuur in Verandering</h5>
            <a href="./donatie.php?work_id=2" class="btn btn-primary mt-3">Steun dit project</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card project-card h-100 border-0">
          <div class="project-top">
            <img src="./images/studentmetcamera.png" alt="set camera's" class="project-img">
            <div class="project-user">
              <img src="./images/person-3.jpg" alt="Profielfoto van student" class="avatar">
              <span class="user-name">Amina El Idrissi</span>
            </div>
          </div>

          <div class="card-body card-body-custom d-flex flex-column align-items-center">
            <h5 class="card-title">Jong Talent</h5>
            <a href="./donatie.php?work_id=3" class="btn btn-primary mt-3">Steun dit project</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card project-card h-100 border-0">
          <div class="project-top">
            <img src="./images/skyline-donker.png" alt="student fotografie" class="project-img">
            <div class="project-user">
              <img src="./images/person-4.jpg" alt="Profielfoto van student" class="avatar">
              <span class="user-name">Daan de Wit</span>
            </div>
          </div>

          <div class="card-body card-body-custom d-flex flex-column align-items-center">
            <h5 class="card-title">Nacht van de Toekomst</h5>
            <a href="./donatie.php?work_id=4" class="btn btn-primary mt-3">Steun dit project</a>
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
