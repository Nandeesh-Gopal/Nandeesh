<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $destination = $_POST['destination'];
    $date = $_POST['travel-date'];
    $guests = $_POST['guest-count'];
    $notes = $_POST['additional-notes'];

    // Handle form data here (store in database, send email, etc.)
    // For example:
    echo "Booking confirmed for $name! We will send the details to $email.";
}
?>
