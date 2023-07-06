<?php
$servername = "bstudio-server.mysql.database.azure.com";
$username = "prachi";
$password ="Pr@chi12a";
$database = "demodb";


$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/Users/prachisharma/Downloads/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL);
// $conn = mysqli_connect($servername, $username, $password, $database);
// if(!$conn){
// //     echo "success";
// // }else{
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    printf("Connection Established.\n");
?>

