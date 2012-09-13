<?php
include 'db/db.php';
$username = $_POST['username'];
$password = $_POST['password'];



if($_POST){

$query = mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$data = mysql_fetch_assoc($query);


if(mysql_num_rows($query)) {
	//session_start();
	//$_SESSION['anvandarnamn'] = $data['anvandarnamn'];

	header("Location: pageOm.php");


}
}


?>