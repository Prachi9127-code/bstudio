CREATE TABLE `threads` (
    `thread_id` int(7) NOT NULL AUTO_INCREMENT,
    `thread_title` varchar(255) NOT NULL,
    `thread_desc` text NOT NULL,
    `thread_cat_id` int(7) NOT NULL,
    `thread_user_id` int(7) NOT NULL,
    `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`thread_id`)
);
