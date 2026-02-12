<!doctype html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Support Emma van der Berg - GLR Photography Exhibition</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles/donation.css" />
    <link rel="icon" type="image/x-icon" href="./images/logo.png" />
  </head>
  <body>
    <?php include("./header.php"); ?>

    <!-- Hero Section -->
    <section class="hero">
      <div class="container">
        <img
          src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop"
          alt="Emma van der Berg portrait"
          class="profile-photo"
        />
        <h1>Emma van der Berg</h1>
        <p class="tagline">Urban & Street Photography Specialist</p>
        <div class="accent-line"></div>
      </div>
    </section>

    <!-- Story Section -->
    <section id="about" class="story">
      <div class="container narrow">
        <h2>About My Work</h2>
        <p>
          Growing up in Rotterdam, I've always been fascinated by the contrast
          between old and new architecture, the energy of street life, and the
          stories hidden in everyday moments. My photography captures the soul
          of urban spaces—the quiet corners, the bustling intersections, and the
          people who breathe life into concrete.
        </p>

        <blockquote class="pull-quote">
          "Every street has a story waiting to be told through light and
          shadow."
        </blockquote>

        <p>
          For the past two years at Grafisch Lyceum Rotterdam, I've been
          refining my craft, learning to see the extraordinary in the ordinary.
          This exhibition represents not just my technical growth, but my
          deepening understanding of how photography can preserve fleeting
          moments and reveal the beauty in urban chaos.
        </p>

        <p>
          The funds raised will go directly toward exhibition costs—printing,
          framing, venue rental, and promotional materials. Your support doesn't
          just help me showcase my work; it validates the countless hours spent
          waiting for the perfect light, the perfect moment, the perfect story.
        </p>
      </div>
    </section>

    <!-- Photo Gallery -->
    <section id="work" class="gallery">
      <div class="container">
        <h2>Photography Portfolio</h2>
        <p class="gallery-intro">
          A curated selection of urban stories captured through my lens
        </p>
        <div class="gallery-grid">
          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=600&h=450&fit=crop"
              alt="Rotterdam architecture at golden hour"
            />
            <figcaption>Rotterdam Reflections</figcaption>
          </figure>

          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=600&h=450&fit=crop"
              alt="City streets at night"
            />
            <figcaption>Night Stories</figcaption>
          </figure>

          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1514565131-fce0801e5785?w=600&h=450&fit=crop"
              alt="Urban cyclist in motion"
            />
            <figcaption>Urban Movement</figcaption>
          </figure>

          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=600&h=450&fit=crop"
              alt="Architectural details"
            />
            <figcaption>Lines & Shadows</figcaption>
          </figure>

          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1516996087931-5ae405802f9f?w=600&h=450&fit=crop"
              alt="Street portrait"
            />
            <figcaption>Faces of the City</figcaption>
          </figure>

          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1519501025264-65ba15a82390?w=600&h=450&fit=crop"
              alt="Urban landscape"
            />
            <figcaption>Concrete Jungle</figcaption>
          </figure>

          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?w=600&h=450&fit=crop"
              alt="Train station perspective"
            />
            <figcaption>Transit</figcaption>
          </figure>

          <figure class="gallery-item">
            <img
              src="https://images.unsplash.com/photo-1444723121867-7a241cacace9?w=600&h=450&fit=crop"
              alt="Rainy street reflection"
            />
            <figcaption>After the Rain</figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- Contact Modal -->
    <div id="contactModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Wil je contact opnemen om dit persoon te steunen?</p>
        <div class="modal-buttons">
          <button id="yesBtn" class="btn-primary">Ja</button>
          <button id="noBtn" class="btn-secondary">Nee</button>
        </div>
      </div>
    </div>

    <script src="./js/donation.js"></script>
  </body>
</html>
