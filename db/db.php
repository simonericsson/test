<?php


//1. Ska en anslutning
$con = mysql_connect('localhost', 'root', '') or die(mysql_error("kunde inte ansluta till db"));



//2. Välj rätt databas
$db = mysql_select_db('testar') or die(mysql_error("kunde inte hitta db"));


$sql = "SELECT * FROM Anvandare";
$res = mysql_query($sql);

		while($row = mysql_fetch_assoc($res)) {
			echo '<h1>' . $row['anvandarnamn'] . '</h1>';
	}
?>