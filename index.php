<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SONARA FEST — Where Sound Becomes Experience</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet" />
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar" id="navbar">
    <div class="nav-inner">
      <a href="index.php" class="nav-logo">SONARA<span>FEST</span></a>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="experience.html">Experience</a></li>
        <li><a href="lineup.html">Lineup</a></li>
        <li><a href="tickets.html">Tickets</a></li>
        <?php if(isset($_SESSION['user_id'])): ?>
            <li><a href="logout.php" class="btn-nav">Logout (<?= htmlspecialchars($_SESSION['nama_lengkap']) ?>)</a></li>
        <?php else: ?>
            <li><a href="login.php" class="btn-nav">Login / Register</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero" id="home">
    <!-- ambient blobs -->
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
    <!-- grid overlay -->
    <div class="hero-grid"></div>
    <!-- scan line -->
    <div class="scanline"></div>

    <div class="hero-content">
      <div class="hero-label">
        <span class="label-line"></span>
        LIVE THE SOUND
        <span class="label-line"></span>
      </div>
      <h1 class="hero-title">
        <span class="title-line">Where Sound</span>
        <span class="title-line accent-line">Becomes</span>
        <span class="title-line">Experience</span>
      </h1>
      <p class="hero-sub">
        SONARA FEST adalah ruang di mana musik bukan hanya didengar,<br />
        tetapi dirasakan, dibagikan, dan dihidupkan bersama.
      </p>
      <div class="hero-actions">
        <a href="experience.html" class="btn-primary">
          <span>Explore Experience</span>
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </a>
        <a href="tickets.html" class="btn-ghost">Buy Tickets</a>
      </div>

      <!-- date badge -->
      <div class="hero-meta">
        <div class="meta-item">
          <span class="meta-label">DATE</span>
          <span class="meta-value">9 - 10 – 11 OCT 2045</span>
        </div>
        <div class="meta-divider"></div>
        <div class="meta-item">
          <span class="meta-label">VENUE</span>
          <span class="meta-value">JIExpo Kemayoran, Jakarta</span>
        </div>
        <div class="meta-divider"></div>
        <div class="meta-item">
          <span class="meta-label">STAGE</span>
          <span class="meta-value">4 Stages</span>
        </div>
      </div>
    </div>

    <!-- floating freq bars -->
    <div class="freq-bars" aria-hidden="true">
      <span></span><span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span><span></span>
    </div>

    <!-- scroll indicator -->
    <div class="scroll-hint">
      <span class="scroll-text">SCROLL</span>
      <div class="scroll-line"></div>
    </div>
  </section>



  <!-- PROMOTOR -->
  <section class="promotor" id="promotor">
    <div class="container">
      <div class="section-tag centered">OFFICIAL PROMOTOR</div>
      <h2 class="section-title centered">Promoted <em>By</em></h2>
      
      <div class="sponsor-grid">
        <div class="sponsor-card">
          <img src="https://soundrhythm.id/assets/images/Logo%20SR-01.png" alt="Sponsor 1" class="sponsor-img" />
        </div>
      </div>
    </div>
  </section>
  
  <br>

  <!-- PAYMENT -->
  <section class="payment" id="payment">
    <div class="container">
      <div class="section-tag centered">PAYMENT METHODS</div>
      <h2 class="section-title centered">Convenient <em>Payment</em></h2>
      <div class="sponsor-grid">
        <div class="sponsor-card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/Livin_by_Mandiri_%28Yellow%29.svg/3840px-Livin_by_Mandiri_%28Yellow%29.svg.png" alt="Sponsor 4" class="sponsor-img" />
        </div>
      </div>
    </div>
  </section>

  <!-- SPONSORS -->
  <section class="sponsors" id="sponsors">
    <div class="container">
      <div class="section-tag centered">OFFICIAL PARTNERS</div>
      <h2 class="section-title centered">Supported <em>By</em></h2>
      
      <div class="sponsor-grid">
        <div class="sponsor-card">
          <img src="https://cced.unila.ac.id/uploads/logo/20231005/39f81aa0b9bcc804f9d6dc3f6b3b2005.png" alt="Sponsor 1" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://assets.zonalogo.com/government/pertamina.com/logo-1772848868741-813.png" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://ubsgold.com/storage/2024/03/logo-ubs-gold.png" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Allianz-logo.png?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://maxsi.id/images/logo/telkomsel-baru-2021.png" alt="Sponsor 5" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://images.squarespace-cdn.com/content/v1/59fb9008d55b41827859e581/1685654400048-95MMGQKAFGCKBB51GBWE/Untitled-1_0003_Pan_Pacific_Hotels_and_Resorts_logo.svg.png" alt="Sponsor 7" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Djarum_Super_%28Alt_Horizontal%29.svg" alt="Sponsor 8" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://cdn.freebiesupply.com/logos/large/2x/grab-logo-png-transparent.png" alt="Sponsor 9" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://www.pocarisweat.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpocari-mobile.89f28cd1.png&w=1920&q=75" alt="Sponsor 10" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://branchlessbanking.cimbniaga.co.id/wp-content/themes/cimb/assets/images/hokbenlogo.png" alt="Sponsor 11" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://iconlogovector.com/uploads/images/2023/11/lg-655aee6706ef0-aqua-danone.png" alt="Sponsor 12" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://cdn.prod.website-files.com/6678e033153dbcb379a030a6/66a8dd6aa294882320641f49_Kopi%20Kenangan%20White.png" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/2/20/Logo_indiHome.png" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://vectorez.biz.id/wp-content/uploads/2023/12/Logo-Indofood.png" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/2/23/Wall%27s_Logo.svg?utm_source=commons.wikimedia.org&utm_campaign=index&utm_content=original" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/768d1cf9-392e-4687-8aa2-e284c19a7830/dkxoxp0-d57098b4-8d12-4ab3-8811-427103e32f66.png/v1/fill/w_1788,h_447/glad2glow_logo__png__by_aurora26100_dkxoxp0-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTAwIiwicGF0aCI6Ii9mLzc2OGQxY2Y5LTM5MmUtNDY4Ny04YWEyLWUyODRjMTlhNzgzMC9ka3hveHAwLWQ1NzA5OGI0LThkMTItNGFiMy04ODExLTQyNzEwM2UzMmY2Ni5wbmciLCJ3aWR0aCI6Ijw9MjAwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.xtKt_c3nZe9qhfVq9_CtLVOWXSDeAhVw_EYVYaD2rFc" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://static.id.gtech.asia/prod/100003/20240313/F2085824426D7F4FA9F22B2500D859CC.png?x-oss-process=image/resize,w_1024/format,png" alt="Sponsor 13" class="sponsor-img" />
        </div>
        <div class="sponsor-card">
          <img src="https://vectorseek.com/wp-content/uploads/2023/09/Wardah-Logo-Vector.svg-.png" alt="Sponsor 13" class="sponsor-img" />
        </div>
      </div>
    </div>
  </section>

  <!-- TICKETING PARTNERS -->
  <section class="ticketing-partners" id="ticketing-partners">
    <div class="container">
      <div class="section-tag centered">OFFICIAL TICKETING PARTNERS</div>
      <h2 class="section-title centered">Ticketing <em>By</em></h2>
      
      <div class="sponsor-grid">
        <div class="sponsor-card">
          <img src="https://artatix.co.id/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo-artatix-line.4de7e586.png&w=1024&q=75" alt="ticketing 1" class="sponsor-img" />
        </div>
      </div>
    </div>
  </section>

  <!-- MEDIA PARTNERS -->
  <section class="media-partners" id="media-partners">
    <div class="container">
      <div class="section-tag centered">MEDIA COVERAGE</div>
      <h2 class="section-title centered">Media <em>Partners</em></h2>
      
      <div class="media-partner-grid">
        <div class="media-partner-card">
          <img src="https://i.pinimg.com/originals/35/f2/29/35f2291d9563aebb41936db210515595.png" alt="Prambors" class="media-partner-img" />
        </div>
        <div class="media-partner-card">
          <img src="https://gambar.sgp1.digitaloceanspaces.com/wp-content/uploads/2022/06/06115812/Logo_USSFEED_Black.png" alt="Narasi" class="media-partner-img" />
        </div>
        <div class="media-partner-card">
          <img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Logo_RCTI%2B.png" alt="RCTI+" class="media-partner-img" />
        </div>
        <div class="media-partner-card">
          <img src="https://freelogopng.com/images/all_img/1684126343cnn-logo-png.png" alt="CNN Indonesia" class="media-partner-img" />
        </div>
      </div>
    </div>
  </section>

  <!-- CLOSING -->
  <section class="closing">
    <div class="closing-blob-1"></div>
    <div class="closing-blob-2"></div>
    <div class="container closing-inner">
      <div class="section-tag centered">DON'T MISS IT</div>
      <h2 class="closing-title">
        One Night.<br />One Frequency.<br /><em>One Story.</em>
      </h2>
      <p class="closing-body">
        Lebih dari sekadar panggung, SONARA FEST adalah tempat di mana energi tumbuh, emosi bertemu, dan kenangan
        tercipta. Sebuah ruang bagi setiap orang untuk hadir, merasakan, dan menjadi bagian dari cerita yang dimainkan
        dalam harmoni.
      </p>
      <a href="tickets.html" class="btn-primary btn-large">
        <span>Reserve Your Spot</span>
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
          <path d="M3 9h12M11 5l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </a>
      <div class="closing-deco" aria-hidden="true">
        <span>SONARA FEST 2045</span>
        <span>·</span>
        <span>09 - 10 – 11 OCT</span>
        <span>·</span>
        <span>JAKARTA</span>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <span class="footer-logo">SONARA<em>FEST</em></span>
        <span class="footer-tagline">Where Sound Becomes Experience</span>
      </div>
      <div class="footer-links">
        <a href="index.php">Home</a>
        <a href="experience.html">Experience</a>
        <a href="lineup.html">Lineup</a>
        <a href="tickets.html">Tickets</a>
      </div>
      <div class="footer-bottom">
        <span>© 2045 SONARA FEST. All rights reserved.</span>
      </div>
    </div>
  </footer>

</body>

</html>
