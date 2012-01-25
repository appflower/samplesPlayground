<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1327524420.
 * Generated on 2012-01-25 22:47:00 by root
 */
class PropelMigration_1327524420
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

CREATE TABLE `sf_combine`
(
	`assets_key` VARCHAR(32) NOT NULL,
	`files` TEXT NOT NULL,
	PRIMARY KEY (`assets_key`)
) ENGINE=InnoDB;

CREATE TABLE `sf_combine_server`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`online` TINYINT(1),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `af_portal_state`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`id_xml` VARCHAR(255),
	`user_id` INTEGER,
	`layout_type` VARCHAR(255),
	`content` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `af_widget_setting`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`user` INTEGER,
	`setting` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `af_widget_selector`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`url` VARCHAR(128),
	`params` VARCHAR(255),
	`category_id` INTEGER,
	`permission` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `af_widget_selector_I_1` (`url`),
	INDEX `af_widget_selector_FI_1` (`category_id`),
	CONSTRAINT `af_widget_selector_FK_1`
		FOREIGN KEY (`category_id`)
		REFERENCES `af_widget_category` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `af_widget_category`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`module` VARCHAR(128),
	`name` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `af_widget_category_I_1` (`module`)
) ENGINE=InnoDB;

CREATE TABLE `af_validator_cache`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`signature` VARCHAR(40),
	`path` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `af_validator_cache_I_1` (`signature`),
	INDEX `af_validator_cache_I_2` (`path`)
) ENGINE=InnoDB;

CREATE TABLE `af_save_filter`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`user` INTEGER,
	`path` VARCHAR(255),
	`title` VARCHAR(255),
	`filter` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `af_widget_help_settings`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`widget_help_is_enabled` TINYINT(1) DEFAULT 1,
	`popup_help_is_enabled` TINYINT(1) DEFAULT 1,
	`help_type` TINYINT DEFAULT 1,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

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

CREATE TABLE `afs_notification`
(
	`message` VARCHAR(255) NOT NULL,
	`message_type` VARCHAR(255) NOT NULL,
	`user` VARCHAR(128) NOT NULL,
	`ip` VARCHAR(255) NOT NULL,
	`created_at` DATETIME,
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `af_guard_group`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`description` TEXT,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `af_guard_group_U_1` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `af_guard_permission`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`description` TEXT,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `af_guard_permission_U_1` (`name`)
) ENGINE=InnoDB;

CREATE TABLE `af_guard_group_permission`
(
	`group_id` INTEGER NOT NULL,
	`permission_id` INTEGER NOT NULL,
	PRIMARY KEY (`group_id`,`permission_id`),
	INDEX `af_guard_group_permission_FI_2` (`permission_id`),
	CONSTRAINT `af_guard_group_permission_FK_1`
		FOREIGN KEY (`group_id`)
		REFERENCES `af_guard_group` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `af_guard_group_permission_FK_2`
		FOREIGN KEY (`permission_id`)
		REFERENCES `af_guard_permission` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `af_guard_user`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(128) NOT NULL,
	`algorithm` VARCHAR(128) DEFAULT \'sha1\' NOT NULL,
	`salt` VARCHAR(128) NOT NULL,
	`password` VARCHAR(128) NOT NULL,
	`created_at` DATETIME,
	`last_login` DATETIME,
	`is_active` TINYINT(1) DEFAULT 1 NOT NULL,
	`is_super_admin` TINYINT(1) DEFAULT 0 NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `af_guard_user_U_1` (`username`)
) ENGINE=InnoDB;

CREATE TABLE `af_guard_user_permission`
(
	`user_id` INTEGER NOT NULL,
	`permission_id` INTEGER NOT NULL,
	PRIMARY KEY (`user_id`,`permission_id`),
	INDEX `af_guard_user_permission_FI_2` (`permission_id`),
	CONSTRAINT `af_guard_user_permission_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `af_guard_user` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `af_guard_user_permission_FK_2`
		FOREIGN KEY (`permission_id`)
		REFERENCES `af_guard_permission` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `af_guard_user_group`
(
	`user_id` INTEGER NOT NULL,
	`group_id` INTEGER NOT NULL,
	PRIMARY KEY (`user_id`,`group_id`),
	INDEX `af_guard_user_group_FI_2` (`group_id`),
	CONSTRAINT `af_guard_user_group_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `af_guard_user` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `af_guard_user_group_FK_2`
		FOREIGN KEY (`group_id`)
		REFERENCES `af_guard_group` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `af_guard_remember_key`
(
	`user_id` INTEGER NOT NULL,
	`remember_key` VARCHAR(32),
	`ip_address` VARCHAR(50) NOT NULL,
	`created_at` DATETIME,
	PRIMARY KEY (`user_id`,`ip_address`),
	CONSTRAINT `af_guard_remember_key_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `af_guard_user` (`id`)
		ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE `product`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`price` DOUBLE,
	`quantity` INTEGER,
	`image` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `dummy`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`combo` VARCHAR(255),
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

DROP TABLE IF EXISTS `sf_combine`;

DROP TABLE IF EXISTS `sf_combine_server`;

DROP TABLE IF EXISTS `af_portal_state`;

DROP TABLE IF EXISTS `af_widget_setting`;

DROP TABLE IF EXISTS `af_widget_selector`;

DROP TABLE IF EXISTS `af_widget_category`;

DROP TABLE IF EXISTS `af_validator_cache`;

DROP TABLE IF EXISTS `af_save_filter`;

DROP TABLE IF EXISTS `af_widget_help_settings`;

DROP TABLE IF EXISTS `afcrm_contact`;

DROP TABLE IF EXISTS `afcrm_opportunity`;

DROP TABLE IF EXISTS `afcrm_status`;

DROP TABLE IF EXISTS `afcrm_activity`;

DROP TABLE IF EXISTS `afcrm_account`;

DROP TABLE IF EXISTS `afs_notification`;

DROP TABLE IF EXISTS `af_guard_group`;

DROP TABLE IF EXISTS `af_guard_permission`;

DROP TABLE IF EXISTS `af_guard_group_permission`;

DROP TABLE IF EXISTS `af_guard_user`;

DROP TABLE IF EXISTS `af_guard_user_permission`;

DROP TABLE IF EXISTS `af_guard_user_group`;

DROP TABLE IF EXISTS `af_guard_remember_key`;

DROP TABLE IF EXISTS `product`;

DROP TABLE IF EXISTS `dummy`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
	}

}