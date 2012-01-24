
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- afcrm_contact
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `afcrm_contact`;


CREATE TABLE `afcrm_contact`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`account_id` INTEGER,
	`first_name` VARCHAR(255),
	`last_name` VARCHAR(255),
	`title` VARCHAR(255),
	`email` VARCHAR(255),
	`phone_work` VARCHAR(255),
	`phone_mobile` VARCHAR(255),
	`skype` VARCHAR(255),
	`msn` VARCHAR(255),
	`address_line1` VARCHAR(255),
	`address_line2` VARCHAR(255),
	`city` VARCHAR(255),
	`zipcode` VARCHAR(255),
	`state` VARCHAR(255),
	`country` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `afcrm_contact_FI_1` (`account_id`),
	CONSTRAINT `afcrm_contact_FK_1`
		FOREIGN KEY (`account_id`)
		REFERENCES `afcrm_account` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- afcrm_opportunity
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `afcrm_opportunity`;


CREATE TABLE `afcrm_opportunity`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`amount` VARCHAR(255),
	`account_id` INTEGER,
	`assigned_to` INTEGER,
	`description` TEXT,
	`expected_closedate` DATETIME,
	`created_by` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `afcrm_opportunity_FI_1` (`account_id`),
	CONSTRAINT `afcrm_opportunity_FK_1`
		FOREIGN KEY (`account_id`)
		REFERENCES `afcrm_account` (`id`)
		ON DELETE CASCADE,
	INDEX `afcrm_opportunity_FI_2` (`assigned_to`),
	CONSTRAINT `afcrm_opportunity_FK_2`
		FOREIGN KEY (`assigned_to`)
		REFERENCES `afcrm_contact` (`id`)
		ON DELETE CASCADE,
	INDEX `afcrm_opportunity_FI_3` (`created_by`),
	CONSTRAINT `afcrm_opportunity_FK_3`
		FOREIGN KEY (`created_by`)
		REFERENCES `af_guard_user` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- afcrm_status
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `afcrm_status`;


CREATE TABLE `afcrm_status`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`description` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- afcrm_activity
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `afcrm_activity`;


CREATE TABLE `afcrm_activity`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`subject` VARCHAR(255),
	`account_id` INTEGER,
	`contact_id` INTEGER,
	`status_id` INTEGER,
	`created_by` INTEGER,
	`description` TEXT,
	`due_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `afcrm_activity_FI_1` (`account_id`),
	CONSTRAINT `afcrm_activity_FK_1`
		FOREIGN KEY (`account_id`)
		REFERENCES `afcrm_account` (`id`)
		ON DELETE CASCADE,
	INDEX `afcrm_activity_FI_2` (`contact_id`),
	CONSTRAINT `afcrm_activity_FK_2`
		FOREIGN KEY (`contact_id`)
		REFERENCES `afcrm_contact` (`id`)
		ON DELETE CASCADE,
	INDEX `afcrm_activity_FI_3` (`status_id`),
	CONSTRAINT `afcrm_activity_FK_3`
		FOREIGN KEY (`status_id`)
		REFERENCES `afcrm_status` (`id`)
		ON DELETE CASCADE,
	INDEX `afcrm_activity_FI_4` (`created_by`),
	CONSTRAINT `afcrm_activity_FK_4`
		FOREIGN KEY (`created_by`)
		REFERENCES `af_guard_user` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

#-----------------------------------------------------------------------------
#-- afcrm_account
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `afcrm_account`;


CREATE TABLE `afcrm_account`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`city` VARCHAR(255),
	`zipcode` VARCHAR(255),
	`address_line1` VARCHAR(255),
	`address_line2` VARCHAR(255),
	`state` VARCHAR(255),
	`country` VARCHAR(255),
	`phone` VARCHAR(255),
	`fax` VARCHAR(255),
	`email` VARCHAR(255),
	`website` VARCHAR(255),
	`description` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
