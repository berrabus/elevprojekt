<!DOCTYPE html>
<html lang="sv">
   <head>
      <meta charset="utf-8">
      <title>Tabell</title>
      <style>

         table {
         border-collapse: collapse;
         }
         th,td {
         border-style: solid;
         border-width: thick;
         }
      </style>
   </head>
   <body>
      <?php
         define("DB_HOST", "localhost");
         define("DB_NAME", "db_register");
         define("DB_USER", "phpmyadmin");
         define("DB_PASSWORD", "grEPut017");
          ?>

      <?php
          $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
          $stmt = $db->query("SELECT * FROM `projekt`");
         ?>

       <table>
          <tr><th>Förnamn</th><th>Efternamn</th><th>Telefonnummer</th></tr>
         <?php
            while ($row = $stmt->fetch()) {
                echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";
            }
            ?>
      </table>

      <form action="filtrera.php" method="post">
  <p>Välj:
  <select name="val">
    <option value="fnamn">Förnamn</option>
    <option value="enamn">Efternamn</option>
    <option value="tfn">Telefon</option>
  </select>
</p>

  <p>Exakt matchning: <input type="radio" name="matchning" value="exaktmatchning"></p>
  <p>Partiell matchning: <input type="radio" name="matchning" value="partiellmatchning"></p>
  <p>Filtrera: <input type="text" name="sok"></p>
  <input type="submit" value="Sök">
</form>
  <br><br>

      <a href="loggout.php">Logga ut</a>

   </body>
</html>
