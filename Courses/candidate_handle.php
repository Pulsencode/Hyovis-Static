<?php

// To Connect to the database
$conn = mysqli_connect("localhost", "hyovisco_admin", "Hyovis(Course)@8281", "hyovisco_emb_sys_reg") or die("Connection Failed");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone_number = htmlspecialchars($_POST["phone_number"]);
    $whatsapp_number = htmlspecialchars($_POST["whatsapp_number"]);
    $district = htmlspecialchars($_POST["district"]);
    $address = htmlspecialchars($_POST["address"]);
    $employement_status = htmlspecialchars($_POST["employement_status"]);


    // Check for empty values
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["phone_number"]) || empty($_POST["whatsapp_number"]) || empty($_POST["district"]) || empty($_POST["address"]) || empty($_POST["employement_status"])) {
        // Set an error message
        $error_message = "All fields are required. Please fill in all the details.";

        // Redirect to index page with the error message
        header("Location: ./index.php?error_message=" . urlencode($error_message));
        exit;
    }
    
    
    // Prepare the SQL query
    $query = "INSERT INTO registrations (name, email, phone_number, whatsapp_number, district, address, employement_status) VALUES ('$name', '$email', '$phone_number', '$whatsapp_number', '$district', '$address', '$employement_status')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect to the result page with user details
        header("Location: ./result.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&phone_number=" . urlencode($phone_number) . "&whatsapp_number=" . urlencode($whatsapp_number) . "&district=" . urlencode($district) . "&address=" . urlencode($address) . "&employement_status=" . urlencode($employement_status));
        exit;
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
        echo "Try Again";
    }

    // Close the database connection
    mysqli_close($conn);

} else {
    header("Location: ./index.php");
    exit;
}
?>
