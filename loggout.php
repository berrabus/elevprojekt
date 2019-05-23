<?php
header('location:index1.php');
session_start();
session_unset();
session_destroy();
exit();
?>
