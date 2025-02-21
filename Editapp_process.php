<?php
include ("Connection.php");
$id = $_POST['id'];
$appname = $_POST['appname'];
$founder = $_POST['founder'];

$description = $_POST['description'];
$rating = $_POST['rating'];
$safeTips = $_POST['safeTips'];


$sql = "update popular_appinfo set appname = '$appname', founder = '$founder', description ='$description' ,
rating = '$rating', safeTips='$safeTips' where id=$id";

if(mysqli_query($connection, $sql)){
    echo "<script>
    alert('Application Successfully Updated!');
    window.location.href=('Popularsocial.php');
    </script>";
    
}
else echo "<script>
alert('Error! something went wrong!');
window.location.href=('Edit-appform.php');
</script>";

?>