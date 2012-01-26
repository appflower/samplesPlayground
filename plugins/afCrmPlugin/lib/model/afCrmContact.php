<?php



/**
 * Skeleton subclass for representing a row from the 'afcrm_contact' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model
 */
class afCrmContact extends BaseafCrmContact {


	public function __toString() {
		return $this->getFirstName()." ".$this->getLastName();
	}

} // afCrmContact
