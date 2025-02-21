<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sms.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>SMC Website</title>
</head>
<body class="appbody">
    <?php 
    session_start();
    if (isset($_SESSION['admin'])){
    include('Admin_navbar.php');
     
     ?>
    
    <div class="app-container">
    <div class="app-content">
        <h3>Insert Application Info</h3>

        <form action="popularApp_process.php" method="post" enctype="multipart/form-data">
            <div class="app-input">
            <div class="app-wrap">
            <div class="app-flex">
               
               <label class="pro">App Logo</label>
               <input class="apppicture" type="file" name="logo" required><br> 
             
               <label class="pro">App Name</label>
               <input type="text" name="appname" placeholder="Enter application name" required> <br>
               <label class="pro">Rating</label>
               <input type="text" name="rating" placeholder="Enter rating" required> <br>
               <label class="pro">Founder</label>
               <input type="text" name="founder" placeholder="Enter Founder name" required> <br>
               
            </div>
            <div class="app-flex">
               

               <label class="pro">Description</label>
               <textarea class="descrip" name="description" placeholder="Write description" required></textarea> <br>
                
               <label class="pro">Safety Tips</label>
               <textarea class="descrip" name="safeTips" placeholder="Write Safety Tips" required></textarea> <br>
            </div>
            
            </div>
            <button class="confirm" type="submit" name="confirm">CONFIRM</button>
            </div>  
                                       
        </form>
    </div>
    </div>
    <?php } ?>
</body>
</html>