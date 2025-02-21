<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sms.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <title>SMC Website</title>
</head>
<body class="logback">

    <?php 
    include('Navbar.php'); 
    if(isset($_COOKIE['logfail'])){
        echo "Your Login is Blocked! Try Again Later.";
      }
      else {
    ?>  

    <div class="logContainer">
        <div class="loginForm">
        <form action="Login_process.php" method="post">
            <div class="logPhoto1">
                    
                <h2>Login Form</h2>
                <input type="text" name="username" placeholder="Username" required>
                
                <input type="password" name="password" placeholder="Password" required>
                    
                <button class="buttonlog" type="submit">Login</button>
            </div> 
            <div class="g-recaptcha" data-sitekey="6Lec74cpAAAAANlPkKCc-ZSamV7vsGIJ5eCLwxf0">
               
            </div>   
        </form>
        
     
        <span id="span">Already have an account? <a href="Register.php"> Register now </a></span>
        
        </div>
    </div>
    <?php }  ?>
     
</body>
</html>