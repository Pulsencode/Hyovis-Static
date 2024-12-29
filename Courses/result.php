<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../images/favicon.ico" />
    <title>Course Registration - Hyovis</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <a href="./index.html" class="navbar-brand logo">
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
    <div class="px-4 py-3 my-3 border rounded rounded-4 ">
        <h1 class="display-5 fw-bold text-center text-success">Registration Successful</h1>
        <div class="col-lg-6 mx-auto ">
            <!-- Display user details -->
            <p><strong>Name:</strong>
                <?php echo htmlspecialchars($_GET['name']); ?>
            </p>
            <p><strong>Email:</strong>
                <?php echo htmlspecialchars($_GET['email']); ?>
            </p>
            <p><strong>Phone Number:</strong>
                <?php echo htmlspecialchars($_GET['phone_number']); ?>
            </p>
            <p><strong>WhatsApp Number:</strong>
                <?php echo htmlspecialchars($_GET['whatsapp_number']); ?>
            </p>
            <p><strong>District:</strong>
                <?php echo htmlspecialchars($_GET['district']); ?>
            </p>
            <p><strong>Address:</strong>
                <?php echo htmlspecialchars($_GET['address']); ?>
            </p>
            <p><strong>Employment Status:</strong>
                <?php echo htmlspecialchars($_GET['employement_status']); ?>
            </p>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>