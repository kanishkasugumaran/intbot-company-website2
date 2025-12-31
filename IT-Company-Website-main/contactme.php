<?php
require("./mailing/mailfunction.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'];
    $phone   = $_POST['phone'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $body = "
    Name: $name
    Phone: $phone
    Email: $email

    Message:
    $message
    ";

    $status = mailfunction("Company", $body);

    if ($status) {
        echo "<h2 style='text-align:center'>Thanks! We will contact you soon.</h2>";
    } else {
        echo "<h2 style='text-align:center'>Error sending message. Please try again.</h2>";
    }
}
?>