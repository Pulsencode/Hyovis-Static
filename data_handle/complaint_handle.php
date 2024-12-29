<?php

//need to change db id and pass
$conn = mysqli_connect("localhost", "root", "Test@123", "candidate_data") or die("Connection Failed");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $phone_number = htmlspecialchars($_POST['phone_number']);
    $address = htmlspecialchars($_POST["address"]);
    $projectId = htmlspecialchars($_POST["project_id"]);
    $complaintType = htmlspecialchars($_POST["complaint_type"]);
    $complaint = htmlspecialchars($_POST["complaint"]);


    if (empty($name) || empty($address) || empty($projectId) || empty($complaintType) || empty($complaint)) {
        // Redirect with an error message
        header("Location: ../customer-support.php?error=Please%20fill%20all%20required%20fields.");
        exit;
    } else {
        $sql = "INSERT INTO `candidates` (`id`, `name`, `phone_number`,`address`, `projectId`, `complaintType`, `complaint`,`registered_at`) VALUES (NULL, '$name','$phone_number', '$address', '$projectId', '$complaintType', '$complaint', current_timestamp());";

        $qry = mysqli_query($conn, $sql);

        // Redirect with a success message
        header("Location: ../customer-support.php?success=Data%20submitted%20successfully.");
        exit;
    }

} else {
    header("Location: ../customer-support.php");
    exit;
}