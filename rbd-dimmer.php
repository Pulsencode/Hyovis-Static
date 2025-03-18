<!doctype html>
<html lang="en">

<?php $page_title = 'RBD Dimmer Module | Hyovis Technologies';
include('includes/head.php'); ?>

<body>
  <!-- Header -->
  <header id="header">
    <!-- Navbar 1 - Bootstrap Brain Component -->
    <?php include('includes/navigation.php'); ?>

    <!-- Hero Section -->
    <section class="bg-primary" data-bs-theme="dark">
      <div class="container-fluid overflow-hidden">
        <div class="row">
          <div class="col-12 col-md-6 order-1 order-md-0 align-self-md-end">
            <div class="row py-3 py-sm-5 py-xl-9 bsb-section-mt-md-1 justify-content-sm-center">
              <div class="col-12 col-sm-10">
                <h1 class="display-2 fw-bolder mb-4 text-white">RBD Dimmer Module</h1>
                <div class="row">
                  <div class="col-12 col-xxl-8">
                    <h2 class="fs-5 mb-0 text-secondary">Advanced AC Dimmer Module for Induction Fan Speed Control and Light Dimming</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 p-0">
            <figure class="bsb-overlay-figure w-100 h-100 m-0" style="--bsb-overlay-figure-opacity: .3">
              <img class="img-fluid w-100 h-100 object-fit-cover" loading="lazy"
                src="./assets/img/products/rbd-dimmer.webp" alt="RBD Dimmer Module">
              assets\img\products\RBD.png
            </figure>
          </div>
        </div>
      </div>
    </section>
  </header>

  <!-- Main -->
  <main id="main">
    <!-- Product Description Section -->
    <section class="py-5 py-xl-8">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card border-0 shadow-sm">
              <div class="card-body p-4 p-md-5">
                <h2 class="h3 mb-4">Product Description</h2>
                <p class="lead mb-4">The Hyovis RBD Dimmer Module is a versatile microcontroller-based solution designed for precise control of AC loads. This advanced module excels in both induction fan speed control and light dimming applications, offering smooth and efficient operation across a wide input voltage range.</p>

                <h3 class="h4 mb-3">Key Features</h3>
                <ul class="list-unstyled mb-4">
                  <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Wide input voltage range: 100-230V AC</li>
                  <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Microcontroller-based control for precise operation</li>
                  <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Ideal for induction fan speed control</li>
                  <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Efficient light dimming capabilities</li>
                  <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Compact and reliable design</li>
                </ul>

                <h3 class="h4 mb-3">Technical Specifications</h3>
                <div class="table-responsive mb-4">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>Input Voltage</th>
                        <td>100-230V AC</td>
                      </tr>
                      <tr>
                        <th>Control Type</th>
                        <td>Phase-cut dimming</td>
                      </tr>
                      <tr>
                        <th>Control Interface</th>
                        <td>PWM / Analog</td>
                      </tr>
                      <tr>
                        <th>Operating Temperature</th>
                        <td>-20°C to +60°C</td>
                      </tr>
                      <tr>
                        <th>Protection</th>
                        <td>Over-current, Over-temperature, Short-circuit</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="text-center mt-5">
                  <a href="./assets/downloads/rbd-dimmer-library.zip" class="btn btn-primary btn-lg">
                    <i class="bi bi-download me-2"></i>Download Library
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>


</body>

</html>