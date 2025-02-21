<?php
session_start();
if (isset($_SESSION['admin'])){
include ("Connection.php");
$id = $_GET['id'];
$sql = "delete from popular_appinfo where id =$id";
if (mysqli_query($connection,$sql))
{
    echo "<script>
    alert('App Successfully deleted');
    window.location.href = 'Popularsocial.php';
    </script>";
}}
else echo"<script> alert('Only Admin Can Delete'); </script>";


?>