<?php
$servername = "idiscuss.mysql.database.azure.com";
$username = "prachi";
$password ="Pr@chi12a";
$database = "sampledb";


$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL);

    if (!$conn) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    $res1 = mysqli_query($conn, "SHOW TABLES LIKE 'categories'");
    
    if (mysqli_num_rows($res1) <= 0) {
        //Create table if it does not exist
        $sql = file_get_contents("categories.sql");
        if(!mysqli_query($conn, $sql)){
            die('Table Creation Failed');
        }
    }

    $res2 = mysqli_query($conn, "SHOW TABLES LIKE 'comment'");
    
    if (mysqli_num_rows($res1) <= 0) {
        //Create table if it does not exist
        $sql = file_get_contents("comment.sql");
        if(!mysqli_query($conn, $sql)){
            die('Table Creation Failed');
        }
    }
    $res3 = mysqli_query($conn, "SHOW TABLES LIKE 'note'");
    
    if (mysqli_num_rows($res1) <= 0) {
        //Create table if it does not exist
        $sql = file_get_contents("notes.sql");
        if(!mysqli_query($conn, $sql)){
            die('Table Creation Failed');
        }
    }
    $res4 = mysqli_query($conn, "SHOW TABLES LIKE 'users'");
    
    if (mysqli_num_rows($res1) <= 0) {
        //Create table if it does not exist
        $sql = file_get_contents("users.sql");
        if(!mysqli_query($conn, $sql)){
            die('Table Creation Failed');
        }
    }
    $res5 = mysqli_query($conn, "SHOW TABLES LIKE 'threads'");
    
    if (mysqli_num_rows($res1) <= 0) {
        //Create table if it does not exist
        $sql = file_get_contents("threads.sql");
        if(!mysqli_query($conn, $sql)){
            die('Table Creation Failed');
        }
    }
?>

