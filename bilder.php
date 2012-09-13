<?php
include 'db/db.php';
include 'login.php';
include 'includes/login_form.php'
?>

<!DOCTYPE>
<html>
<head>
	<title>Simons Super Sida</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<div id="mainArea">
	<div id="contentBox">
        
        <div id="title">Simons Smarta Sida</div>
        
 <?php include 'includes/meny.php'; ?> 
        
        <div id="box"> 
          <?php include 'includes/header.php';?>
          <div class="contentTitle">Vaelkommen</div>
            <div class="pageContent">
            	<p> Hej </p>
                <p> Jag gillar bilder</p>
              
            </div>
<?php include 'includes/footer.php'; ?> 

        </div>
	</div>
</div>
</body>
</html>