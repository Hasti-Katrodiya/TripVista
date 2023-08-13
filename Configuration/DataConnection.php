<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $DataBase = "TripVista";

    $connection =    mysqli_connect($host, $user, $password, $DataBase);
    
    if($connection)
    {
        // echo" Connection Done !! ";
    }
    else{
        echo "Error: Connection failed!!";
    }
?>