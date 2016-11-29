<!DOCTYPE html>
<html lang="en">
    <head>
      <title>PorVous | Contact</title>

      <meta charset="UTF-8" http-equiv="Content-Type" content="text/html;">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
      <meta HTTP-EQUIV="Expires" CONTENT="-1">
      <meta charset="UTF-8" http-equiv="Content-Type" content="text/html;">

      <link rel="stylesheet" type="text/css" href="/CSS/core.css">

    <style type="text/css">
      .message {
        text-align: center;
        background: #fff;
        font-size: 16pt;
        padding: 10px;
      }
    </style>

  </head>
  <body>
      <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/header.php') ?>

      <div class="message">

        Submission sent!

      </div>

      <?php include ($_SERVER['DOCUMENT_ROOT'].'/peripherals/footer.php') ?>
  </body>
</html>

<?php

// session_destroy();  Destroys all sessions

unset($_SESSION['errors']); // only destroys specific sessions
unset($_SESSION['fields']);

?>
