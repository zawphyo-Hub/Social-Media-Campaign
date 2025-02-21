<?php
    include ('Connection.php');

    $profileName = $_FILES['profile']['name'];
    $profileTmpName = $_FILES['profile']['tmp_name'];
    $path = "images/profile/".$profileName;
    copy($profileTmpName,$path);

        
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['confirm_pass'];
    $phno = $_POST['phoneno'];
 
    if ($_POST['regions'] == 0) {
        echo "<script>
        alert('Please select regions');
        window.location.href = 'Register.php';
        </script>";
    } else {
        $regions = $_POST['regions'] ;
        if ($cpass == $pass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $select = "select * from usersinfo where username = '$uname'";
            $result = mysqli_query($connection,$select);
            $row = mysqli_num_rows($result);
    
            if ($row == 0){
    
                $sql = "insert into usersinfo(username,password,email,phoneno,regions,profile,
                role)
                values('$uname','$hash','$email','$phno','$regions','$path','user')";
    
                if (mysqli_query($connection, $sql)) {
                    echo "<script>
                    alert('Successfully registered! Please Login again');
                    
                    window.location.href = 'Login.php';
                    </script>";
                } else {
                    echo "Unsuccessful " ;
                }
            }
            else {
            echo "<script>
            alert('username already exit! Please register with another username');
            window.location.href = 'Register.php';
                   
            </script>";
            }
            
        }
        else {
            echo "<script>
            alert('Password incorrect!');
            window.location.href = 'Register.php';
        </script>";
        }
    

    }
        

?>
