CREATE TABLE `categories` (
    `category_id` int(8) NOT NULL,
    `category_name` varchar(255) NOT NULL,
    `category_description` varchar(255) NOT NULL,
    `created` datetime NOT NULL DEFAULT current_timestamp()
);