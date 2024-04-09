CREATE TABLE tx_popuppower_domain_model_configuration(
	`hidden` TINYINT DEFAULT '0' NOT NULL,
	`name` varchar(256) DEFAULT 'Default' NOT NULL,
	`layout` varchar(45) DEFAULT 'modal' NOT NULL,
	`position` varchar(10) DEFAULT 'center' NOT NULL,
	`behaviour_appearance` varchar(10) DEFAULT 'once' NOT NULL,
	`extend_to_subpages` TINYINT DEFAULT '0' NOT NULL,
	`popup_content` INT(11) DEFAULT '0' NOT NULL,
	`delay` int(11) DEFAULT '0' NOT NULL
);
