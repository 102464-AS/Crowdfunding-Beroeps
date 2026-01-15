<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="home.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-olive px-4">
  <a class="navbar-brand fw-bold" href="#">logo/img</a>

  <button class="navbar-toggler" type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNavbar"
          aria-controls="mainNavbar"
          aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="toggler-icon top-bar"></span>
    <span class="toggler-icon middle-bar"></span>
    <span class="toggler-icon bottom-bar"></span>
  </button>

  <div class="collapse navbar-collapse" id="mainNavbar">
    <ul class="navbar-nav mx-auto text-center mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link" href="./home.html">Home</a></li>
      <li class="nav-item"><a class="nav-link active" href="#">Explore</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
    </ul>

    <div class="profile-badge ms-lg-3">Li</div>
  </div>
</nav>

<!-- HERO -->
<section class="hero d-flex align-items-center position-relative" style="height: 500px; overflow: hidden;">
  <img src="../home/img/image.png" alt="Hero" class="position-absolute w-100 h-100" style="object-fit: cover;">
  <div class="hero-overlay position-absolute w-100 h-100"></div>
  <div class="container hero-content text-white position-relative">
    <h1 class="fw-bold text-dark">oooooh placeholder magie</h1>
    <button class="btn btn-light mt-3">Button</button>
  </div>
</section>

<!-- FEATURES -->
<section class="bg-mustard py-5">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-md-3">
        <h5 class="text-danger fw-bold">1. Title Here</h5>
        <p>Paragraph here</p>
        <a href="#" class="fw-bold text-dark">LEARN MORE</a>
      </div>
      <div class="col-md-3">
        <h5 class="text-danger fw-bold">1. Title Here</h5>
        <p>Paragraph here</p>
        <a href="#" class="fw-bold text-dark">LEARN MORE</a>
      </div>
      <div class="col-md-3">
        <h5 class="text-danger fw-bold">1. Title Here</h5>
        <p>Paragraph here</p>
        <a href="#" class="fw-bold text-dark">LEARN MORE</a>
      </div>
      <div class="col-md-3">
        <h5 class="text-danger fw-bold">1. Title Here</h5>
        <p>Paragraph here</p>
        <a href="#" class="fw-bold text-dark">LEARN MORE</a>
      </div>
    </div>
  </div>
</section>

<!-- DONATE -->
<section class="py-5 bg-mustard">
  <div class="container bg-light-green rounded p-4">
    <h3 class="text-center fw-bold mb-4">Donate</h3>
    <div class="row g-3 align-items-center">
      <div class="col-md-4"><input class="form-control" placeholder="Placeholder"></div>
      <div class="col-md-4"><input class="form-control" placeholder="Placeholder"></div>
      <div class="col-md-3"><input class="form-control" placeholder="Placeholder"></div>
      <div class="col-md-1 text-end"><button class="btn btn-outline-dark">➤</button></div>
    </div>
  </div>
</section>

<!-- PROFILE SECTION -->
<section class="bg-mustard py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Portrait_Placeholder.png"
             class="img-fluid rounded" alt="Profile">
      </div>
      <div class="col-md-8">
        <h1>H1</h1>
        <p>P</p>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="home.js"></script>

</body>
</html>
