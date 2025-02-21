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
    include('Admin_navbar.php');;
    include ("Connection.php");
    $id = $_GET['id'];
    $sql = "select * from popular_appinfo where id=$id";
    $result = mysqli_query($connection,$sql);
    $passRecord = mysqli_fetch_assoc($result);
     
    ?>
    
    <div class="app-container">
    <div class="app-content">
        <h3>Edit Application</h3>

        <form action="Editapp_process.php" method="post">
            <div class="app-input">
            <div class="app-wrap">
            <div class="app-flex">
               <input type = "hidden" name="id" value="<?php echo $passRecord['id']?>">
                            
               <label class="pro">App Name</label>
               <input type="text" name="appname" value="<?php echo $passRecord['appname']?>"> <br>

               <label class="pro">Founder</label>
               <input type="text" name="founder" value="<?php echo $passRecord['founder']?>"> <br>
              
               <label class="pro">Description</label>
               <textarea class="descrip" name="description" ><?php echo $passRecord['description']?></textarea> <br>
              
               
            </div>
            <div class="app-flex">
               
               <label class="pro">Rating</label>
               <input type="text" name="rating" value="<?php echo $passRecord['rating']?>" > <br>
               
                
               <label class="pro">Safety Tips</label>
               <textarea class="descrip" name="safeTips" ><?php echo $passRecord['safeTips']?></textarea> <br>
               <button type="submit" >Update</button>
            </div>
            
            </div>
           
            </div>  
                                       
        </form>
    </div>
    </div>
    <?php } ?>
</body>
</html>