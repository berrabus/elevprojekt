<?php

include_once "/var/www/settings.php";

?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Kollar...</title>
   </head>
   <body>


      <?php
// Kommer från formuläret
$username = $_POST['username'];
$password = $_POST['password'];
//echo $username."<br>";
//echo $password."<br>";
      try {
           $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
           // Söker efter en past där BÅDE användarnamnet och lösenordet stämmer med vad användaren
           // skickat med formuläret
           $stmt = $db->query("SELECT  username, password FROM tb_user WHERE username='$username' AND password='$password'");
           // "if" inte "while", bara en post ska det finnas
           if ($row = $stmt->fetch()) {
              // $_SESSION['inloggad'] = "sant";
              $val = "sant";
            //   echo "HITTAS<br>"; // För att testa
         }
         else {
          // $_SESSION['inloggad'] = "falskt";
          $val = "falskt";
          //  echo "HITTAS INTE<br>"; // För att testa
         }
        // Felmeddelande om det blir fel när databasen kontaktas
       } catch (PDOException $e) {
         echo 'Connection failed: ' . $e->getMessage();
        }
         ?>
         <form action="visa.php" method="post">
           <!-- dålt fält -->
           <input type="hidden" name="val" value="<?php echo $val; ?>">
           <input type="submit">
         </form>

   </body>
   </html>
