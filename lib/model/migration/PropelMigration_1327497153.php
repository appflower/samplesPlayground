<?php

/**
 * Data object containing the SQL and PHP code to migrate the database
 * up to version 1327497153.
 * Generated on 2012-01-25 14:12:33 by www-data
 */
class PropelMigration_1327497153
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

ALTER TABLE `order` CHANGE `id` `id` INTEGER(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `order` ADD
(
	`name` VARCHAR(255),
	`price` DOUBLE,
	`quantity` INTEGER,
	`image` LONGBLOB
);

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

ALTER TABLE `order` CHANGE `id` `id` INTEGER NOT NULL AUTO_INCREMENT;

ALTER TABLE `order` DROP `name`;

ALTER TABLE `order` DROP `price`;

ALTER TABLE `order` DROP `quantity`;

ALTER TABLE `order` DROP `image`;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
',
);
	}

}