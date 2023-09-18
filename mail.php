<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$State = $_POST['State'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone\n address: $address \n State: $State \n city: $city\n zipcode: $zipcode \n Message: $message";
$recipient = "info@speedigo.in";
$subject = "Enquiry-Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
