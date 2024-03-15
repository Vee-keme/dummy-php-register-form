<?php
    $db_server = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = "businessdb";
    $conn = "";

    $conn = mysqli_connect($db_server,$db_user,$db_password, $db_name );

    try{
        $conn = mysqli_connect($db_server,$db_user,$db_password, $db_name );;
    } catch(mysqli_sql_exception){
        echo "you are not connected";
    }

    if($conn){
        echo "you are connected";
    }
?>