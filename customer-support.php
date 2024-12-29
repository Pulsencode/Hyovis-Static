<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="./images/favicon.ico" />
    <title>Hyovis-Official</title>
    <!-- TODO Need to change all this -->
    <meta name="description"
        content="Welcome to Hyovis, a technology and water systems firm. We are committed in providing sustainable solutions for the efficient management and conservation of water resources.We specialize in the design, development, and implementation of cutting-edge technologies that optimize water usage and provide innovative solutions to the complex challenges facing water systems today." />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://kit.fontawesome.com/f9ec1b096c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "Hyovis",
      "telephone": "8075578938",
      "email": [
      "admin@hyovis.com",
      "sales@hyovis.com"
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Karipuzha",
        "addressLocality": ", Allapuzha dist",
        "addressRegion": "Kerala",
        "addressCountry": "India",
        "postalCode": ": 690103"
      }
    }
  </script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="./index.html" class="navbar-brand logo">
                <img style="margin-left: 2rem;" src="images/logo.png" alt="Logo-Hyovis" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="./index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./About.html">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Products</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-link" href="WashingMachineDrumCleaner.html">
                                    Washing Machine Drum Cleaning Tablet</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item nav-link" href="Products.html">View All Products</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-link" href="./GardenAutomation.html">Garden Automation</a>
                            </li>
                            <li><a class="dropdown-item nav-link" href="./WaterLevelController.html">Water Level
                                    Controllers</a>
                            </li>
                            <li><a class="dropdown-item nav-link" href="./AutomationProjects.html">Automation
                                    Projects</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item nav-link" href="Services.html">View All Services</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="./Career.html">Career</a></li>
                    <li class="nav-item"><a class="nav-link" href="./Contact.html">Contact</a></li>
                </ul>
            </div>

        </nav>
        <div class="navbar-space"></div>
    </header>

    <main>
        <div class="container border shadow-lg m-3 rounded-4 mx-auto">
            <h1 class="m-4 text-primary text-center">Customer Support</h1>
            <?php
            if (isset ($_GET['error'])) {
                echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($_GET['error']) . '</div>';
            } elseif (isset ($_GET['success'])) {
                echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($_GET['success']) . '</div>';
            }
            ?>
            <form method="post" action="data_handle/complaint_handle.php">

                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone Number:</label>
                    <input type="number" class="form-control" name="phone_number" required>
                    <small class="text-muted">Please enter a valid phone number.</small>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" name="address" required>
                </div>

                <div class="mb-3">
                    <label for="project_id" class="form-label">Project ID:</label>
                    <input type="text" class="form-control" name="project_id" required>
                    <small class="text-muted">Project ID has been allotted by Hyovis.</small>
                </div>

                <div class="mb-3">
                    <label for="complaint_type" class="form-label">Complaint Type:</label>
                    <select class="form-select" name="complaint_type" required>
                        <option value="" selected>Select Complaint Type</option>
                        <option value="Washing Machine Drum Cleaning Tablet">Washing Machine Drum Cleaning Tablet
                        </option>
                        <option value="Garden Automation">Garden Automation</option>
                        <option value="Water Level Controller">Water Level Controller</option>
                        <option value="Automation Projects">Automation Projects</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="complaint" class="form-label">Complaint:</label>
                    <textarea class="form-control" name="complaint" rows="4" required></textarea>
                    <small class="text-muted">Explain your complaint in detail.</small>
                </div>

                <div class="mb-3 text-end">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>

            </form>
        </div>


    </main>
    <section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </section>
</body>
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <a href="./index.html"><img src="images/logo_footer.png" alt="Logo-Hyovis" class="m-0 p-0"></a>
                    <p>Karipuzha, Mavelikara, Kerala 690103<br>
                        <strong>Phone:</strong> +91(0) 8075578938<br>
                        <strong>Admin:</strong> admin@hyovis.com<br>
                        <strong>Sales:</strong> sales@hyovis.com<br>
                    </p>
                </div>
                <div class="footer-links col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a class="nav-link " href="./index.html">Home</a></li>
                        <li><a class="nav-link " href="./Products.html">Products</a></li>
                        <li><a class="nav-link " href="./Services.html">Services</a></li>
                    </ul>
                </div>
                <div class="footer-links col-lg-3">
                    <h4>Conditions and Policy's</h4>
                    <ul>
                        <li><a class="nav-link " href="./PrivacyPolicy.html">Privacy Policy</a></li>
                        <li><a class="nav-link " href="./TermsandConditions.html">Terms and Conditions</a></li>
                        <li><a class="nav-link " href="./CancellationandRefund.html">Cancellation and Refund</a></li>
                        <li><a class="nav-link " href="./ShippingandDelivery.html">Shipping and Delivery</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-2 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Follow Us Through Your Favorite Social Media Platforms</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/Hyovis_?t=fEl7yhdhyUNRIUvmnQYsNw&s=09" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100089405483127&mibextid=ZbWKwL"
                            target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://instagram.com/hyovis_watersystems?igshid=MzRlODBiNWFlZA==" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://youtube.com/@hyovistech" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="copyright">
            &copy; 2024 <strong><span>Hyovis</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <strong><span><a href="https://www.pulsencode.com/" target="_blank"
                        rel="noopener noreferrer">Pulsencode</a></span></strong>
        </div>
    </div>
</footer>

</html>