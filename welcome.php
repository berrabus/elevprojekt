<?php
  session_start();
  if (!$_SESSION['inloggad'])
  {
    $_SESSION['fel'] = "<h2>Du har inte rätt att vara här</h2><a href=\"index1.php\">Logga in</a>";
    header("location:fel.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Hemlig sida</title>
      <style>
      table {
          border-collapse: collapse;
      }
      td {
        border-style: solid;
        border-width: 2px;
        padding: 3px;
      }
     </style>
   </head>
   <body>



<h1>Välkommen!</h1>
<?php
      echo "<a href=\"table.php\">Till tabellen</a><br>";
 ?>



   </body>
   </html>
