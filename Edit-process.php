<?php
include ("Connection.php");
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];

$regions = $_POST['regions'];


$sql = "update usersinfo set username = '$username', email = '$email', phoneno ='$phoneno' ,
 regions = '$regions' where id=$id";

if(mysqli_query($connection, $sql)){
    echo "<script>
    alert('Successfully Updated!');
    window.location.href=('Userlists.php');
    </script>";
    
}
else echo "<script>
alert('Error! something went wrong!');
window.location.href=('Editform.php');
</script>";

?>