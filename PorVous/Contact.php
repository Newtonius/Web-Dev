<?php 
session_start();
require_once 'form/security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <title>PorVous | Contact</title>

      <meta charset="UTF-8" http-equiv="Content-Type" content="text/html;">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
      <meta HTTP-EQUIV="Expires" CONTENT="-1">
      <meta charset="UTF-8" http-equiv="Content-Type" content="text/html;">

      <link rel="stylesheet" type="text/css" href="CSS/core.css">
      <link rel="stylesheet" type="text/css" href="form/formStyle.css">

    <style type="text/css">
    </style>

  </head>
  <body>
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/header.php') ?>

      <section class="formBody">

          <div class="contactHeader">
            <p>Contact Us</p>
          </div>


          <?php if(!empty($errors)): ?>
            <div class="errorPanel">
                <ul>
                  <li><?php echo implode('</li><li>', $errors); ?></li>
                </ul>
            </div>
          <?php endif; ?>

          <form method="post" action="form/formAction.php">
            
            <label style="font-weight: 400; letter-spacing: 0; font-size: 12px;"><em>*Required fields</em></label>
            
            <label>Name*</label>
            <input name="name" placeholder="First and Last" <?php echo isset($fields['Name']) ? 'value="' . e($fields['Name']) . '"' : '' ?>>

            <label>Email*</label> 
            <input name="email" type="email" placeholder="Enter Valid E-mail" <?php echo isset($fields['Email']) ? 'value="' . e($fields['Email']) . '"' : '' ?>>
            
            <label>Subject</label> 
            <input name="subject" type="text" placeholder="Subject of message"<?php echo isset($Subject) ? 'value="' . e($Subject) . '"' : '' ?>>
            
            <label>Message*</label>
            <textarea name="message" placeholder="Write your message here..." <?php echo isset($fields['Message']) ? e($fields['Message']) : '' ?>></textarea>

            <input id="submit" name="submit" type="submit" value="Submit" />
          </form>

      </section>

      <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>
  </body>
</html>

<?php

// session_destroy();  Destroys all sessions

unset($_SESSION['errors']); // only destroys specific sessions
unset($_SESSION['fields']);

?>