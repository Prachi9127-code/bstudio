CREATE TABLE `comment` (
    `comment_id` int(11) NOT NULL,
    `comment_content` text NOT NULL,
    `thread_id` int(11) NOT NULL,
    `comment_by` int(8) NOT NULL,
    `comment_time` datetime NOT NULL DEFAULT current_timestamp()
);