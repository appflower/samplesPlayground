<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1327494082.
 * Generated on 2012-01-25 13:21:22 by www-data
 */
class PropelMigration_1327494082
{

	public function preUp($manager)
	{
		// add the pre-migration code here
	}

	public function postUp($manager)
	{
		// add the post-migration code here
	}

	public function preDown($manager)
	{
		// add the pre-migration code here
	}

	public function postDown($manager)
	{
		// add the post-migration code here
	}

	/**
	 * Get the SQL statements for the Up migration
	 *
	 * @return array list of the SQL strings to execute for the Up migration
	 *               the keys being the datasources
	 */
	public function getUpSQL()
	{
		return array (
  'propel' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

ALTER TABLE `af_guard_user` CHANGE `is_active` `is_active` TINYINT(1) DEFAULT 1 NOT NULL;

ALTER TABLE `af_guard_user` CHANGE `is_super_admin` `is_super_admin` TINYINT(1) DEFAULT 0 NOT NULL;

ALTER TABLE `af_widget_help_settings` CHANGE `widget_help_is_enabled` `widget_help_is_enabled` TINYINT(1) DEFAULT 1;

ALTER TABLE `af_widget_help_settings` CHANGE `popup_help_is_enabled` `popup_help_is_enabled` TINYINT(1) DEFAULT 1;

ALTER TABLE `sf_combine_server` CHANGE `online` `online` TINYINT(1);

CREATE TABLE `afcrm_contact`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
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

CREATE TABLE `afcrm_opportunity`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
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
	INDEX `afcrm_opportunity_FI_2` (`assigned_to`),
	INDEX `afcrm_opportunity_FI_3` (`created_by`),
	CONSTRAINT `afcrm_opportunity_FK_1`
		FOREIGN KEY (`account_id`)
		REFERENCES `afcrm_account` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `afcrm_opportunity_FK_2`
		FOREIGN KEY (`assigned_to`)
		REFERENCES `afcrm_contact` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `afcrm_opportunity_FK_3`
		FOREIGN KEY (`created_by`)
		REFERENCES `af_guard_user` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `afcrm_status`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`description` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `afcrm_activity`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`subject` VARCHAR(255),
	`account_id` INTEGER,
	`contact_id` INTEGER,
	`status_id` INTEGER,
	`created_by` INTEGER,
	`description` TEXT,
	`due_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `afcrm_activity_FI_1` (`account_id`),
	INDEX `afcrm_activity_FI_2` (`contact_id`),
	INDEX `afcrm_activity_FI_3` (`status_id`),
	INDEX `afcrm_activity_FI_4` (`created_by`),
	CONSTRAINT `afcrm_activity_FK_1`
		FOREIGN KEY (`account_id`)
		REFERENCES `afcrm_account` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `afcrm_activity_FK_2`
		FOREIGN KEY (`contact_id`)
		REFERENCES `afcrm_contact` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `afcrm_activity_FK_3`
		FOREIGN KEY (`status_id`)
		REFERENCES `afcrm_status` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `afcrm_activity_FK_4`
		FOREIGN KEY (`created_by`)
		REFERENCES `af_guard_user` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `afcrm_account`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
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

CREATE TABLE `order`
(
	`id` INTEGER(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
	}

	/**
	 * Get the SQL statements for the Down migration
	 *
	 * @return array list of the SQL strings to execute for the Down migration
	 *               the keys being the datasources
	 */
	public function getDownSQL()
	{
		return array (
  'propel' => '
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS `afcrm_contact`;

DROP TABLE IF EXISTS `afcrm_opportunity`;

DROP TABLE IF EXISTS `afcrm_status`;

DROP TABLE IF EXISTS `afcrm_activity`;

DROP TABLE IF EXISTS `afcrm_account`;

DROP TABLE IF EXISTS `order`;

ALTER TABLE `af_guard_user` CHANGE `is_active` `is_active` TINYINT DEFAULT 1 NOT NULL;

ALTER TABLE `af_guard_user` CHANGE `is_super_admin` `is_super_admin` TINYINT DEFAULT 0 NOT NULL;

ALTER TABLE `af_widget_help_settings` CHANGE `widget_help_is_enabled` `widget_help_is_enabled` TINYINT DEFAULT 1;

ALTER TABLE `af_widget_help_settings` CHANGE `popup_help_is_enabled` `popup_help_is_enabled` TINYINT DEFAULT 1;

ALTER TABLE `sf_combine_server` CHANGE `online` `online` TINYINT;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
	}

}