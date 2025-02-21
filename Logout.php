<?php
        session_start();
        session_destroy();// removes all session data
        
        echo "<script> alert ('Successfully Logout');
        window.location.href='Login.php';
        </script>";
        
?>