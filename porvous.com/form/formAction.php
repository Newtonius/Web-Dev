<?php
session_start();
require_once 'lib/PHPMailerAutoload.php';

// Array of errors
$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {

	// Array of required fields
	$fields = [
		'Name' => $_POST['name'],
		'Email' => $_POST['email'],
		'Message' => $_POST['message']
		];

	$Subject[] = $_POST['subject'];

	// Itterate through each value in the fields array
	foreach ($fields as $field => $data) {
		// If the specified field is empty add an error message in the errors array
		if(empty($data)) {
			$errors[] = $field . ' is blank.';
		}
	}

	if(empty($errors)) {

		$m = new PHPMailer;

		$m->isSMTP();
		$m->SMTPAuth = true;

		$m->Host = 'smtp.gmail.com';
	  $m->Username = 'anbolanos235@gmail.com';
		$m->Password = 'Deoxyribonucleicacid235';
		$m->SMTPSecure = 'ssl';
		$m->Port = 465;

		$m->isHTML();

		$m->Subject = 'Contact form submitted';
		$m->Body = 'From: '. $fields['Name'] .' ('. $fields['Email'] .')<p>'. $Subject .'<br/>'. $fields['Message'] .'</p>';

		$m->FromName = 'Contact';

		//$m->AddReplyTo($fields['Email'], $fields['Name']);

		$m->AddAddress('anbolanos235@gmail.com', 'Angel Bolanos');

		if($m->send()) {
			header('Location: submission_sent.php');
			die();
		} else {
			header('Location: error.php');
			$errors[] = 'Sending Failed';
		}

	}

} else {
		$errors[] = 'Whoops! Something went wrong. Please try again...';
}

// Storing data in an open session
// Store errors
$_SESSION['errors'] = $errors;
//Store field data if error occurs
$_SESSION['fields'] = $fields;
