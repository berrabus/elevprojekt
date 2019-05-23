
<?php
// Start the session
// session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<title>Hemlig sida</title>
</head>
<body>
<h3>Hemlig sida</h3>

<?php
$inloggad = $_POST['val'];
// $inloggad = $_SESSION['inloggad'];
// echo "INLOGGAD".$inloggad."<br>"; // För att testa
if ($inloggad=="sant")
{
  echo "Välkommen!<br>";
}
else {
  echo "Förbjudet!<br>";
}
?>
</body>
</html>
