<script src='https://www.google.com/recaptcha/api.js'></script>
<?php
    session_start();
    include("Connection.php");
    if(isset($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
    }


    if(!$captcha){
       echo "<script>alert('Please check the reCaptcha form!');</script>";
       echo "<script>window.location='Login.php';</script>";
    }
   
    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lec74cpAAAAABX3cVCuUZuvPtxItArmzKe2vvGM&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    //super key


   
   if ($response['success'] == false)
   {
       echo "<script>alert('Please ensure you are human!');</script>";
       echo "<script>window.location='Login.php';</script>";
   }
   
    
    if (isset($_SESSION['counter']))
    {
        $counter = $_SESSION['counter'];
        if($counter==2){
            echo "<script>window.location.href='timerLogin.php'</script>";
            setcookie("logfail","fail",time()+60*10); // 60*10 = 10mins
        }
        
    }
    else {
        $counter = 0; //first time fail
    }
    

    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $select = "select * from usersinfo where username = '$uname'";
    $result = mysqli_query($connection,$select);
    $row = mysqli_num_rows($result);

    if ($row == 0){
        echo "<script>
              alert('Username Incorrect!!');
              window.location.href = 'Login.php';
              </script>";
    }
    else {
        $passRecord = mysqli_fetch_assoc($result);
        $hashPass = $passRecord['password'];
        if (password_verify($pass,$hashPass)){

            if($passRecord['role']=='admin')
            {
                $_SESSION['admin'] = 'admin';
                echo "<script>
                alert('Login Successful As Admin');
                window.location.href = 'Userlists.php';
                </script>";
                
            }
            else{
                echo "<script>
                alert('Login Successful!');
                window.location.href = 'Home.php';
                </script>";

            }
                     
        }
        else 
        {
            echo "<script>
            alert('Incorrect Password!!');
            window.location.href = 'Login.php';
            </script>";
            $counter++;
            $_SESSION['counter'] = $counter;
            echo $counter;

        }    
    }


?>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lec74cpAAAAANlPkKCc-ZSamV7vsGIJ5eCLwxf0"></script>