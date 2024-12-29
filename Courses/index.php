<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico" />
    <meta name="description" content="Register for the Embedded System Course at Hyovis. Join us to enhance your skills and knowledge in embedded systems.">
    <meta name="keywords" content="Embedded System, Course Registration, Hyovis, Technology, Skills Development">
    <meta name="author" content="Abhimanue Rajesh">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://hyovis.com/Courses/">
    <meta property="og:title" content="Embedded System Course Registration - Hyovis">
    <meta property="og:description" content="Register for the Embedded System Course at Hyovis. Join us to enhance your skills and knowledge in embedded systems.">
    <meta property="og:image" content="https://hyovis.com/images/logo.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://hyovis.com/Courses/">
    <meta property="twitter:title" content="Embedded System Course Registration - Hyovis">
    <meta property="twitter:description" content="Register for the Embedded System Course at Hyovis. Join us to enhance your skills and knowledge in embedded systems.">
    <meta property="twitter:image" content="https://hyovis.com/images/logo.png">
    
    <title>Course Registration - Hyovis</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="./index.php" class="navbar-brand logo">
                <img style="margin-left: 2rem;" src="../images/logo.png" alt="Logo-Hyovis" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="../index.html">Home</a></li>
                </ul>
            </div>

        </nav>
        <div class="navbar-space"></div>
    </header>
    <div class="px-4 my-4">
        <h1 class="display-6 fw-bold mb-2 text-center">Embedded System Course Registration</h1>
        <hr>
        <!-- Display error message if it exists -->
        <?php if (isset($_GET['error_message'])): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($_GET['error_message']); ?>
        </div>
        <?php endif; ?>
        <form action="candidate_handle.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                <input type="number" class="form-control" id="phone_number" name="phone_number" required>
            </div>
            <div class="mb-3">
                <label for="whatsapp_number" class="form-label fw-bold">Whatsapp Number</label>
                <input type="number" class="form-control" id="whatsapp_number" name="whatsapp_number" required>
            </div>
            <div class="mb-3">
                <label for="district" class="form-label fw-bold">District</label>
                <select class="form-select" aria-label="Default select example" id="district" name="district" required>
                    <option selected>Select Your District</option>
                    <option value="Alappuzha">Alappuzha</option>
                    <option value="Ernakulam">Ernakulam</option>
                    <option value="Idukki">Idukki</option>
                    <option value="Kannur">Kannur</option>
                    <option value="Kasaragod">Kasaragod</option>
                    <option value="Kollam">Kollam</option>
                    <option value="Kottayam">Kottayam</option>
                    <option value="Kozhikode">Kozhikode</option>
                    <option value="Malappuram">Malappuram</option>
                    <option value="Palakkad">Palakkad</option>
                    <option value="Pathanamthitta">Pathanamthitta</option>
                    <option value="Thrissur">Thrissur</option>
                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                    <option value="Wayanad">Wayanad</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="district" class="form-label fw-bold">Address</label>
                <textarea class="form-control" placeholder="Enter Your Address Here" id="address" required
                    style="height: 100px" name="address"></textarea>
            </div>
            <div class="mb-3">
                <label for="employement_status" class="form-label fw-bold">Current Employment Status</label>
                <select class="form-select" aria-label="Default select example" id="employement_status" required
                    name="employement_status">
                    <option selected>Select Your Employment Status</option>
                    <option value="student">Student</option>
                    <option value="self_employed">Self Employed</option>
                    <option value="working_professional">Working Professional</option>
                    <option value="un_employed">Un Employed</option>
                </select>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>