<?php
include 'db/db.php';
include 'login.php';
?>

<!DOCTYPE>
<html>
<head>
	<title>Simons Super Sida</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div class="login">
        <form method="POST" action="pageOm.php">
            <label for="username">Anvandare</label>
            <input type="text" name="username" id="username" />
            <label for="password">Losenord</label>
            <input type="password" name="password" id="password" />

            <input type="submit" name="submit" value="Login" class="button"/>
        </form>
    </div>
<div id="mainArea">
	<div id="contentBox">
        <div id="title">Simons Smarta Sida</div>
        
        <div id="linkGroup">
            <div class="link"><a href="index.php">Start</a></div>
            <div class="link"><a href="pageOm.php">Om</a></div>
            <div class="link"><a href="index.html">Bilder</a></div>
            <div class="link"><a href="index.html">Kontakt</a></div>
        </div>
        
        <div id="box"> 
          <div id="header"></div>
          <div class="contentTitle">Vaelkommen</div>
            <div class="pageContent">
            	<p> Hej </p>
              
            </div>
            <div id="footer">Hemsidan</a> av Simon Ericsson</a> 
        </div>
	</div>
</div>
</body>
</html>
