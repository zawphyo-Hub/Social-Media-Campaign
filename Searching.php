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
        include('Admin_navbar.php');
        include ("Connection.php");
        
        $keyword = $_POST['keyword'];
        
        
        $select = "select * from usersinfo where role='user' and (username LIKE '%$keyword%' OR password LIKE '%$keyword%' OR 
        email LIKE '%$keyword%' OR phoneno LIKE '%$keyword%' OR regions LIKE '%$keyword%' )";

    
        $result = mysqli_query($connection,$select);
        $row = mysqli_num_rows($result);

        if ($row == 0){
            echo "<script>
            alert('Nothing found!');
            window.location.href=('Userlists.php');
            </script>";
        }
        else {
            for($i=0;$i<$row;$i++){
            $passRecord = mysqli_fetch_assoc($result);
           
            $id = $passRecord['id'];

            echo "<div class='usersinfo'>";
    
            echo "<img src='" .$passRecord['profile'] ."' class='profile' width = 100, height = 100><br>";
            echo " <h3> Name - " .$passRecord['username']. "</h3>";
            echo "<p> Email - ".$passRecord['email'] . "</p>";
            echo "<p> PhoneNumber - ".$passRecord['phoneno'] . "</p>";
            echo " <p>Region - ".$passRecord['regions']. "</p>";
        
            
            echo "<div class='action'>";
            echo "<a href='#' onclick='showConfirm(".$id.")'>Delete </a>"; 
            echo "<a href='Editform.php?id=$id'>Edit</a>";
            echo "</div>";
            echo "</div>";
            echo "<hr>";
           
            }

        }

    
    ?>
</body>
</html>

