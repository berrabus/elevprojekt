<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Logga in</title>

   </head>
   <body>

   <?php
        echo "<h2>".$_SESSION['fel']."</h2>";
   ?>


   </body>
   </html>
