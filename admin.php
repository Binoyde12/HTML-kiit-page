<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN FORM</title>
    <link rel="stylesheet" href="styles.css">
    <style>
      
          .center{
            
            display: flex;
            justify-content:space-around;
            align-items: center;  
          
          
       }
    </style>
</head>
<body style="background: radial-gradient(circle,white,green)">
    <form action="" method="post">
    <div class="container" style="background: #F6DDCC;">
        <div class="brand-logo"></div>
        <!-- <div class="brand-title">KiiT</div> -->
        <div style="font-weight:bold;">Admin-Form</div>
        <div class="inputs">
          <label style="font-weight: 520; color: #6E2C00;">USERNAME</label>
          <input type="text"placeholder="example::2129103kiit" name="user" required>
          <label style="font-weight: 520; color: #6E2C00;">PASSWORD</label>
          <input type="password" placeholder="Min 6 charaters long" name="pass" required>
        </div>
        <div class="center">
        <button class="b1" type="submit" >LOGIN</button>
        <button type="reset" class="b2">RESET</button>
		</form>
<?php
	if($_SERVER['REQUEST_METHOD']=='POST') {
		$username = $_POST['user'];
		$pass = $_POST['pass'];
		if($username == "admin@kiit.ac.in" && $pass == "kiit123")
			header('location: register.html');
		else header('location:invalid1.html');
	}
?>
        </div>
        <a href="https://kiit.ac.in/faq/" target="_blank">T/C </a>
      </div>
</body>
</html>
