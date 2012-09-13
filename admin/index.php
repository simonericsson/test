<?php
session_start();

if(!isset($_SESSION['username'])){
	header("Location: ../index.php");
}
?>

 <a href="logout.php">Logga ut mig.</a>
 <a href="kontakt.php">kontakt.</a>
