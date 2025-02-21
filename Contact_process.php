<?php
include ('Connection.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
        
$sql = "insert into contact (firstname,lastname, email, message)
        values('$firstname','$lastname','$email', '$message') ";
        if (mysqli_query($connection, $sql)) {
            echo "<script>
            alert('Thank You for Your Message');
            window.location.href='Contact.php';
            </script>";
        }
        else {
            echo "Unsuccessful";
        }  
     
    


?>