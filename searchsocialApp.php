<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sms.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>SMC Website</title>
</head>
<body  class="userbody">
<?php
        include('Navbar.php');
        include ("Connection.php");
        
        $keyword = $_POST['keyword'];
        
        
        $select = "select * from popular_appinfo where appname LIKE '%$keyword%' OR founder LIKE '%$keyword%' OR 
        description LIKE '%$keyword%' OR rating LIKE '%$keyword%' OR safeTips LIKE '%$keyword%' ";

    
        $result = mysqli_query($connection,$select);
        $row = mysqli_num_rows($result);

        if ($row == 0){
            echo "<script>
            alert('Nothing found!');
            window.location.href=('userSocialApp.php');
            </script>";
        }
        else {
            for($i=0;$i<$row;$i++){
            $passRecord = mysqli_fetch_assoc($result);
           
            $id = $passRecord['id'];

            echo "<div class='usersinfo'>";

        
            echo "<img src='" .$passRecord['applogo'] ."' class='profile' width = 100, height = 100><br>";
            echo " <p> <span class='spapp' >Name</span> - " .$passRecord['appname']. "</p>";
            echo "<p> <span class='spapp' >Founder</span> - ".$passRecord['founder'] . "</p>";
            echo "<p> <span class='spapp' >Description</span> - ".$passRecord['description'] . "</p>";
            echo " <p> <span class='spapp' >Rating</span> - ".$passRecord['rating']. "</p>";
            
            echo "<div class='safe-info'>";
            echo "<h4>Safety Instructions</h4>";
            echo " <p>".$passRecord['safeTips']. " </p>"."<br>";
            echo "</div>";
            echo "</div>";
            
            }

        }

    
    ?>
</body>
</html>