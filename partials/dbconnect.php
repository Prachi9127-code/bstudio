<?php
$servername = "idiscuss.mysql.database.azure.com";
$username = "prachi";
$password ="Pr@chi12a";
$database = "sampledb";


$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL);
// $conn = mysqli_connect($servername, $username, $password, $database);
// if(!$conn){
// //     echo "success";
// // }else{
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    printf("Connection Established.\n");


    
    // SQL statements to create tables
$sql1 = "CREATE TABLE `categories` (
    `category_id` int(8) NOT NULL,
    `category_name` varchar(255) NOT NULL,
    `category_description` varchar(255) NOT NULL,
    `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

$sql2 = "CREATE TABLE `comment` (
    `comment_id` int(11) NOT NULL,
    `comment_content` text NOT NULL,
    `thread_id` int(11) NOT NULL,
    `comment_by` int(8) NOT NULL,
    `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

$sql3 = "CREATE TABLE `note` (
    `sno` int(11) NOT NULL,
    `title` varchar(50) NOT NULL,
    `description` text NOT NULL,
    `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

$sql4 = "CREATE TABLE `threads` (
    `thread_id` int(7) NOT NULL,
    `thread_title` varchar(255) NOT NULL,
    `thread_desc` text NOT NULL,
    `thread_cat_id` int(7) NOT NULL,
    `thread_user_id` int(7) NOT NULL,
    `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

$sql5 = "CREATE TABLE `users` (
    `sno` int(20) NOT NULL,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

// Execute the SQL statements
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE) {
echo "Tables created successfully!";
} else {
echo "Error creating tables: " . $conn->error;
}
?>

