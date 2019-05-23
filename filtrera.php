<?php

session_start();
include_once("settings.php");
?>
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
  <table>
     <tr><th>Förnamn</th><th>Efternamn</th><th>Telefonnummer</th></tr>
<?php
$val1 =$_POST["val"];
$val2 =$_POST["matchning"];
$val3 =$_POST["sok"];

if($val1 == "fnamn")
{
  if($val2 == "exaktmatchning")
  {

    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
     $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt WHERE fnamn LIKE '$val3' ORDER BY fnamn");
     while($row = $stmt->fetch())
     {

       echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

     }

  }
  else if($val2 == "partiellmatchning")
  {

    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
     $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt WHERE fnamn LIKE '%$val3%' ORDER BY fnamn");
     while($row = $stmt->fetch())
     {

       echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

     }

  }
  else
  {
  $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
   $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt ORDER BY fnamn");
   while($row = $stmt->fetch())
   {

     echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

   }
   }
 }

 if($val1 == "enamn")
 {
   if($val2 == "exaktmatchning")
   {

     $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
      $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt WHERE enamn LIKE '$val3' ORDER BY enamn");
      while($row = $stmt->fetch())
      {

        echo "<tr><td>".$row['enamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

      }

   }
   else if($val2 == "partiellmatchning")
   {

     $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
      $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt WHERE enamn LIKE '%$val3%' ORDER BY enamn");
      while($row = $stmt->fetch())
      {

        echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

      }

   }
   else
   {
   $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
    $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt ORDER BY enamn");
    while($row = $stmt->fetch())
    {

      echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

    }
    }
  }



  if($val1 == "tfn")
  {
    if($val2 == "exaktmatchning")
    {

      $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
       $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt WHERE tfn LIKE '$val3' ORDER BY tfn");
       while($row = $stmt->fetch())
       {

         echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

       }

    }
    else if($val2 == "partiellmatchning")
    {

      $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
       $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt WHERE tfn LIKE '%$val3%' ORDER BY tfn");
       while($row = $stmt->fetch())
       {

         echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

       }

    }
    else
    {
    $db = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASSWORD);
     $stmt = $db->query("SELECT fnamn,enamn,tfn FROM projekt ORDER BY tfn");
     while($row = $stmt->fetch())
     {

       echo "<tr><td>".$row['fnamn']."</td><td>".$row['enamn']."</td><td>".$row['tfn']."</td></tr>";

     }
     }
   }

 ?>
   </body>
