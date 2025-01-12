<!doctype html>
<html lang="en">

<?php $page_title = 'About | Hyovis Technologies'; include('includes/head.php'); ?>

<body>
  <!-- Header -->
  <header id="header">

    <!-- Navbar 1 - Bootstrap Brain Component -->
    <?php include('includes/navigation.php'); ?>

    <!-- Hero 4 - Bootstrap Brain Component -->
    <section class="bg-primary" data-bs-theme="dark">
      <div class="container-fluid overflow-hidden">
        <div class="row">
          <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end">
            <div class="row py-3 py-sm-5 py-xl-9 bsb-section-mt-md-1 justify-content-sm-center">
              <div class="col-12 col-sm-10">
                <h1 class="display-2 fw-bolder mb-4 text-white">About Us</h1>
                <div class="row">
                  <div class="col-12 col-xxl-8">
                    <p class="fs-5 mb-0 text-secondary">Whether you're a small business or a large enterprise, we offer tailored plans to suit your needs perfectly.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 p-0">
            <figure class="bsb-overlay-figure w-100 h-100 m-0" style="--bsb-overlay-figure-opacity: .3">
              <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                src="./assets/img/hero/about-img-1.webp" alt="">
            </figure>
          </div>
        </div>
      </div>
    </section>

  </header>

  <!-- Main -->
  <main id="main">

    <!-- Section - Services -->
    <!-- Service 4 - Bootstrap Brain Component -->
    <section class="py-5 py-xl-8 bsb-section-py-xxl-1">
      <div class="container mb-5 mb-md-6 mb-xl-10">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-9 col-xl-12 col-xxl-7 text-center">
            <h3 class="fs-6 text-secondary mb-2 text-uppercase">How did we start?</h3>
            <h2 class="display-4 fw-bold mb-3">Hyovis: Smarter Solutions for Water Management</h2>
            <p class="fs-5 mb-0 text-secondary">Hyovis Technologies and Water Systems was founded in 2022 by AnanthuKrishnan and co-founder Abhimanue Rajesh. Our mission is to combat water wastage and promote sustainable water management solutions. We began by introducing a washing machine drum cleaning tablet, which reduced water usage. Our next innovation was a water level controller for household water tanks, automating the filling process and minimizing waste. Over time, we've expanded into irrigation automation systems, water treatment equipment, and completed numerous commercial and industrial projects. Our goal is to empower industries, farmers, and households to use water efficiently. As we move forward, Hyovis is committed to innovating and exploring new frontiers in water technology to make a greater impact and create a world where water is managed responsibly.</p>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer 4 - Bootstrap Brain Component -->
  <?php include('includes/footer.php'); ?>
  <!-- Javascript Files: Vendors -->
  <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Javascript Files: Controllers -->
  <script src="./assets/controller/palette-bsb.js"></script>
  <!-- BSB Body End -->
</body>

</html>