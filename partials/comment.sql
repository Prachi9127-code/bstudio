CREATE TABLE `comment` (
    `comment_id` int(11) NOT NULL AUTO_INCREMENT,
    `comment_content` text NOT NULL,
    `thread_id` int(11) NOT NULL,
    `comment_by` int(8) NOT NULL,
    `comment_time` datetime NOT NULL DEFAULT current_timestamp(),
    PRIMARY KEY (`sno`)
);
