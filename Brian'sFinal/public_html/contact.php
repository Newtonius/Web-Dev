<?php
$subject = $_POST['subject'];
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST["message"];
$to = "djvalice@live.com";

mail ($to, $subject, $message, "From: " . $first_name . $last_name);
echo "Sent!";



?>