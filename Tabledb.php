<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smcwebsite";

    $connection = mysqli_connect($host,$username,$password,$dbname);
    if ($connection) {
         echo "Connected!";
    } 
    else echo "Connection error!";

    
    //----------------------------Usersinfo Table Creation------------------------------
    $sql = "create table usersinfo (id integer auto_increment primary key, 
    username varchar(100),password varchar(100),email varchar(50), phoneno int, 
    regions varchar(50),profile varchar(500), role varchar(20))";
        
    //----------------------------Contact Table Creation------------------------------
    // $sql = "create table contact (id integer auto_increment primary key,  
    // firstname varchar(50),lastname varchar(50),email varchar(50), message varchar(500))";

    //----------------------------Popularapp Table Creation------------------------------
    // $sql = "create table popular_appinfo (id integer auto_increment primary key, 
    // applogo varchar(500),appname varchar(100),founder varchar(100),description varchar(500),rating varchar(100))";
    
    if (mysqli_query($connection, $sql))
    {
    	echo "Table successfully created!!"."<br>";
    }
     	
    else echo "Table creation error!!";



?>