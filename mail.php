<?php

if (isset($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Send the email
    mail('peterkioko64@gmail.com', 'Contact Form Submission', 'Name: ' . $name . ', Email: ' . $email . ', Phone: ' . $phone);
}

?>