DROP TABLE IF EXISTS `#__base_item`;

CREATE TABLE `#__base_item` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` int unsigned NOT NULL DEFAULT 0,
	`created_by_alias` varchar(255) NOT NULL DEFAULT '',
	`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modified_by` int unsigned NOT NULL DEFAULT 0,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

INSERT INTO `#__base_item` (`name`, `created`) VALUES
('Hello World!', now()),
('Good bye World!', now());
DROP TABLE IF EXISTS `#__base_customer`;

CREATE TABLE `#__base_customer` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` int unsigned NOT NULL DEFAULT 0,
	`created_by_alias` varchar(255) NOT NULL DEFAULT '',
	`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modified_by` int unsigned NOT NULL DEFAULT 0,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM	AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
