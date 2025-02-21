<?php
session_start();
if (isset($_SESSION['admin'])){
    include('Connection.php');
    $logo = $_FILES['logo']['name'];
    $logoTmpName = $_FILES['logo']['tmp_name'];
    $path = "images/logo/".$logo;
    copy($logoTmpName,$path);

    
    $appname = $_POST['appname'];
    $founder = $_POST['founder'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $safeTips = $_POST['safeTips'];


    $sql = "insert into  popular_appinfo(applogo,appname,founder,description,rating,safeTips)
        values('$path', '$appname','$founder','$description','$rating','$safeTips')";
    
    if (mysqli_query($connection, $sql)) {
        echo "<script>
            alert('Successfully Saved');
                    
            window.location.href = 'Popularapp_form.php';
            </script>";
    } 
    else {
         echo "Error, Unsuccessful" ;
    }
}
else {
        echo "<script>
            alert('Only Admin Can Enter');
            
            </script>";
}

           
        



?>