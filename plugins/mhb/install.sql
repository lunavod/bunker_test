CREATE TABLE `prefix_mhb` (
`mhb_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`blog_id` INT UNSIGNED NOT NULL ,
`auto_join` BOOL NOT NULL DEFAULT '0',
`cant_leave` BOOL NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
