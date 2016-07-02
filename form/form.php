<?php 
session_start();
require_once 'security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" http-equiv="Content-Type" content="text/html;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="formStyle.css">
    <title>Form ex.</title>


    <style type="text/css">
    </style>

  </head>
  <body>

      <header class="body">
        Contact Us
      </header>

      <section class="body">

          <?php if(!empty($errors)): ?>
            <div class="errorPanel">
                <ul>
                  <li><?php echo implode('</li><li>', $errors); ?></li>
                </ul>
            </div>
          <?php endif; ?>

          <form method="post" action="formAction.php">
            
            <label>Name*</label>
            <input name="name" placeholder="First and last" <?php echo isset($fields['Name']) ? 'value="' . e($fields['Name']) . '"' : '' ?>>

            <label>Email*</label> 
            <input name="email" type="email" placeholder="Enter Valid E-mail" <?php echo isset($fields['Email']) ? 'value="' . e($fields['Email']) . '"' : '' ?>>
            
            <label>Subject</label> 
            <input name="subject" type="text" placeholder="Subject of message"<?php echo isset($Subject) ? 'value="' . e($Subject) . '"' : '' ?>>
            
            <label>Message*</label>
            <textarea name="message" placeholder="Write your message here..." <?php echo isset($fields['Message']) ? e($fields['Message']) : '' ?>></textarea>

            <input id="submit" name="submit" type="submit" value="Submit" />
          </form>

          <em>*Required fields</em>

      </section>

      <footer>
        
      </footer class="body">

  </body>
</html>

<?php

// session_destroy();  Destroys all sessions

unset($_SESSION['errors']); // only destroys specific sessions
unset($_SESSION['fields']);

?>