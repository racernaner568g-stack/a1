<?php
// PoshCarrySpot - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PoshCarrySpot — Luxury Handbags, Haute Maroquinerie & Leather Craft</title>
  <meta name="description" content="PoshCarrySpot explores artisanal saddle-stitching, full-grain calfskin leathers, 24K gold hardware, designer tote investment values, and luxury leather care.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-handbag {
      background: var(--accent-rose) !important;
      color: #ffffff !important;
      border-color: var(--accent-rose) !important;
      font-weight: 800 !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Posh<span>CarrySpot</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Posh Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Hero Header -->
  <section class="hero-section" id="hero">
    <div class="container">
      <div class="hero-content">
        <span class="hero-badge">Haute Maroquinerie & Luxury Leather Atelier</span>
        <h1 class="hero-title">Artisanal Handbags & Bespoke Carryalls</h1>
        <p class="hero-desc">Deconstructing hand saddle-stitched full-grain calfskin, 24K gold-plated hardware, patina aging, and investment-grade designer totes.</p>
        <div class="hero-btns">
          <a href="blog.html" class="btn btn-rose">Explore Posh Essays</a>
          <a href="about.html" class="btn btn-outline-dark" style="color: #fff; border-color: #fff;">Leather Atelier Lab</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Artisanal Leather Craftsmanship & Saddle-Stitching Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Craftsmanship Standards</span>
        <h2 class="section-title">The Four Pillars of Haute Maroquinerie</h2>
      </div>
      <div class="grid-4">
        <div class="posh-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">👜</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">Double-Needle Saddle Stitch</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Hand-waxed linen thread hand-sewn to create unbreakable structural seams.</p>
        </div>
        <div class="posh-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">✨</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">Full-Grain Box Calfskin</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Uncompromised vegetable-tanned leathers developing rich patina across decades of use.</p>
        </div>
        <div class="posh-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">🔑</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">24K Gold & Palladium Hardware</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Jewelry-grade turn-locks, clochette padlocks, and hand-polished brass latches.</p>
        </div>
        <div class="posh-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">💎</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-rose); margin-bottom: 0.75rem;">Investment Resilience</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Structured silhouettes retaining 90%+ resale value on secondary luxury auctions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Handbag Architecture & Leather Grain Explorer -->
  <section class="section" id="handbag-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Carry Explorer</span>
        <h2 class="section-title">The Luxury Handbag Architecture Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a luxury carryall specification to inspect its leather grain, stitch count, and investment benchmark:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-dark handbag-btn active-handbag" data-handbag="Structured Full-Grain Calfskin Tote" data-desc="Vegetable-tanned box calfskin tote with double-needle hand saddle-stitching and palladium turn-lock." data-score="9.9/10 Craftsmanship Rating">Structured Calfskin Tote</button>
          <button class="btn btn-outline-dark handbag-btn" data-handbag="Exotic Crocodile Embossed Crossbody" data-desc="Hand-dyed exotic grain leather with 24K gold plated chain strap and suede interior lining." data-score="9.8/10 Haute Couture Finish">Crocodile Crossbody</button>
          <button class="btn btn-outline-dark handbag-btn" data-handbag="Artisanal Soft Grain Hobo Shoulder Bag" data-desc="Supple full-grain bullhide leather with relaxed drape, hand-burnished edges, and brass key fob." data-score="9.9/10 Leather Patina Potential">Soft Grain Hobo</button>
          <button class="btn btn-outline-dark handbag-btn" data-handbag="Bespoke Evening Minaudière Clutch" data-desc="Solid brass shell wrapped in lambskin leather with inlaid mother-of-pearl latch closure." data-score="9.7/10 Evening Elegance">Minaudière Clutch</button>
        </div>
        <div id="handbag-detail">
          <div class="posh-card" style="border-left: 4px solid var(--accent-rose);">
            <h3 style="color: var(--accent-rose); font-size: 1.5rem; margin-bottom: 0.5rem;">Structured Full-Grain Calfskin Tote Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">Vegetable-tanned box calfskin tote with double-needle hand saddle-stitching and palladium turn-lock.</p>
            <strong style="color: var(--accent-gold); font-size: 0.95rem;">Empirical Craftsmanship Benchmark: 9.9/10 Craftsmanship Rating</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Exotic Calfskin Tanning & 24K Gold Hardware Spotlight -->
  <section class="section" id="exotic-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Atelier Metallurgy & Tanning</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Edge-Painting Precision & Micro-Stitching Density</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            Mass-market machine sewing unravels if a single thread breaks. At PoshCarrySpot, we evaluate multi-layer edge painting, hand-burnishing waxes, and hardware electroplating.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">👜 <strong style="color:var(--text-primary);">Hand Saddle-Stitching:</strong> Two needles passing through each hole in opposing directions.</li>
            <li style="margin-bottom: 0.75rem;">✨ <strong style="color:var(--text-primary);">5-Layer Heat-Sealed Edges:</strong> Sanded, dyed, and beeswax-sealed to prevent fraying and moisture penetration.</li>
            <li style="margin-bottom: 0.75rem;">🔑 <strong style="color:var(--text-primary);">Solid Brass Hardware:</strong> Heavyweight brass components coated in 24-karat gold or palladium.</li>
          </ul>
          <a href="about.html" class="btn btn-rose">Our Leather Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=800&q=80" alt="Luxury Handbag Display" style="border-radius: 10px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.6);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Luxury Handbag Matcher & Carry Diagnostic Quiz -->
  <section class="section" id="carry-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Carry Diagnostic</span>
        <h2 class="section-title">Luxury Handbag Matcher Quiz</h2>
      </div>
      <div class="posh-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-rose); margin-bottom: 1rem;">What Is Your Primary Lifestyle & Handbag Silhouette Preference?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="carry-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Structured Full-Grain Calfskin Tote with Laptop Sleeve & 24K Gold Hardware.">
            A. Executive Workday & Travel, Structured Full-Grain Leather Tote
          </button>
          <button class="carry-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Hand-Stitched Box Calfskin Crossbody Satchel with Turn-Lock Closure.">
            B. Weekend Elegance & City Hands-Free Carry, Compact Crossbody Satchel
          </button>
          <button class="carry-quiz-btn btn btn-outline-dark" style="text-align:left; justify-content:flex-start;" data-rec="Bespoke Lambskin Evening Minaudière Clutch with Inlaid Mother-of-Pearl.">
            C. Black-Tie Gala & Evening Fine Dining, Handcrafted Minaudière Clutch
          </button>
        </div>
        <div id="carry-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Craftsmanship Hours & Vintage Handbag Evaluations Performance Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Laboratory Benchmarks</span>
        <h2 class="section-title">Posh Carry Spot Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="posh-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="posh-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="48" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Hand-Stitching Hours Per Bag</p>
        </div>
        <div class="posh-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="24" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Karat Gold Plating</p>
        </div>
        <div class="posh-card" style="text-align: center;">
          <h3 class="metric-number text-rose" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Master Leather Artisans & Handbag Curators Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Haute Acclaim</span>
        <h2 class="section-title">Endorsements From Master Leather Artisans & Handbag Curators</h2>
      </div>
      <div class="grid-3">
        <div class="posh-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "PoshCarrySpot delivers masterclass analyses on hand saddle-stitching density, vegetable tanning, and edge-painting techniques."
          </p>
          <strong style="color: var(--accent-rose); display: block;">— Jean-Luc Laurent</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Master Leather Artisan, Paris</span>
        </div>
        <div class="posh-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research into investment handbag appreciation, hardware electroplating, and leather restoration is unprecedented."
          </p>
          <strong style="color: var(--accent-rose); display: block;">— Victoria Sterling</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Senior Luxury Auction Specialist, London</span>
        </div>
        <div class="posh-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The leading digital journal for haute maroquinerie history, capsule bag curation, and leather patina preservation."
          </p>
          <strong style="color: var(--accent-rose); display: block;">— Matteo Rossi</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Tannery Director, Florence</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Posh Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Posh Dispatches</span>
        <h2 class="section-title">Latest Leather & Handbag Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=800&q=80" alt="Saddle Stitching Science">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Saddle Stitching</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/artisanal-saddle-stitching-vs-machine-sewing-in-luxury-handbags.html">Artisanal Saddle-Stitching vs Machine Sewing</a></h3>
            <p class="blog-excerpt">Double-needle technique, hand-waxed linen thread, and seam strength.</p>
            <a href="blog/artisanal-saddle-stitching-vs-machine-sewing-in-luxury-handbags.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=800&q=80" alt="Full-Grain Calfskin">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Leather Quality</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/evaluating-full-grain-calfskin-exotic-leathers-and-patina-aging.html">Full-Grain Calfskin & Patina Aging</a></h3>
            <p class="blog-excerpt">Vegetable tanning, exotic grains, and decades of patina development.</p>
            <a href="blog/evaluating-full-grain-calfskin-exotic-leathers-and-patina-aging.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=800&q=80" alt="Handbag Hardware">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Bespoke Hardware</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/bespoke-handbag-hardware-24k-gold-plating-palladium-and-latches.html">Bespoke Hardware: 24K Gold & Palladium</a></h3>
            <p class="blog-excerpt">Turn-locks, electroplating thickness, and micro-engraved logos.</p>
            <a href="blog/bespoke-handbag-hardware-24k-gold-plating-palladium-and-latches.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Posh Carry Gazette Newsletter & Unified Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="posh-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-rose);">
        <span class="section-subtitle">Haute Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Posh Carry Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of artisanal leather craft, investment handbag trends, and haute maroquinerie.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to PoshCarrySpot Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 6px;">
          <button type="submit" class="btn btn-rose">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Posh<span>CarrySpot</span></a>
          <p>PoshCarrySpot is a premier editorial platform dedicated to luxury handbags, haute maroquinerie, artisanal saddle-stitching, and bespoke leather craft.</p>
          <p style="margin-top: 1rem; color: var(--accent-rose);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-882-8591
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Posh Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Handbag Focus</h4>
          <p>Deconstructing artisanal saddle-stitching, full-grain calfskin leathers, 24K gold hardware plating, designer tote investments, and luxury leather care globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 PoshCarrySpot. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Haute Maroquinerie Excellence.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
