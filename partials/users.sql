CREATE TABLE `users` (
    `sno` int(20) NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `date` datetime NOT NULL DEFAULT current_timestamp(),
     PRIMARY KEY (`sno`)
);
