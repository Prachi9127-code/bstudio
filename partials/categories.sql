CREATE TABLE `categories` (
    `category_id` int(8) NOT NULL AUTO_INCREMENT,
    `category_name` varchar(255) NOT NULL,
    `category_description` varchar(255) NOT NULL,
    `created` datetime NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`sno`)
);
