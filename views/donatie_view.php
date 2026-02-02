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
    <link rel="stylesheet" href="./styles/donation.css">
    <link rel="icon" type="image/x-icon" href="./images/logo.png">
  </head>
  <body>

    <?php
    include("./header.php");
    ?>

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

    <!-- Goal Section -->
    <section id="goal" class="fundraising-goal">
      <div class="container">
        <h2>Our Goal</h2>
        <p class="goal-intro">
          We aim to raise <strong>€2,000</strong> to cover all exhibition
          expenses including printing, framing, and venue rental.
        </p>
        <div class="goal-bar">
          <div class="progress" style="width: 0%"></div>
        </div>
        <p class="goal-status">Raised: €0 of €2,000</p>
      </div>
    </section>

    <!-- Donation Tiers -->
    <section id="support" class="donation-tiers">
      <div class="container">
        <h2>Support Emma's Exhibition</h2>
        <p class="subtitle">
          Choose a reward tier and help bring this work to life
        </p>

        <div class="tiers-grid">
          <!-- Tier 1 -->
          <div class="tier-card">
            <div class="tier-amount">€5</div>
            <h3>Digital Supporter</h3>
            <ul class="tier-benefits">
              <li>High-resolution digital postcard</li>
              <li>Personal thank you email</li>
              <li>Exhibition updates & behind-the-scenes</li>
            </ul>
            <button class="btn-select" aria-label="Select €5 tier">
              Select This Tier
            </button>
          </div>

          <!-- Tier 2 -->
          <div class="tier-card popular">
            <span class="badge">Most Popular</span>
            <div class="tier-amount">€15</div>
            <h3>Print Supporter</h3>
            <ul class="tier-benefits">
              <li>10×15cm professional print</li>
              <li>Digital postcard collection</li>
              <li>Name in exhibition credits</li>
              <li>Exhibition invitation</li>
            </ul>
            <button class="btn-select" aria-label="Select €15 tier">
              Select This Tier
            </button>
          </div>

          <!-- Tier 3 -->
          <div class="tier-card">
            <div class="tier-amount">€30</div>
            <h3>Framed Art Supporter</h3>
            <ul class="tier-benefits">
              <li>20×30cm framed photo of your choice</li>
              <li>Signed & numbered by artist</li>
              <li>VIP exhibition preview invitation</li>
              <li>Name prominently displayed</li>
            </ul>
            <button class="btn-select" aria-label="Select €30 tier">
              Select This Tier
            </button>
          </div>

          <!-- Tier 4 -->
          <div class="tier-card">
            <div class="tier-amount">€50+</div>
            <h3>Patron</h3>
            <ul class="tier-benefits">
              <li>Custom print size (up to 50×70cm)</li>
              <li>Private exhibition walkthrough</li>
              <li>Personal thank you video</li>
              <li>All previous tier rewards</li>
            </ul>
            <button class="btn-select" aria-label="Select custom amount">
              Select This Tier
            </button>
          </div>
        </div>
      </div>
    </section>

    <script src="./js/donation.js"></script>
  </body>
</html>
