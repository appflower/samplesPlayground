<?php



/**
 * This class defines the structure of the 'afcrm_contact' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.map
 */
class afCrmContactTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.afCrmPlugin.lib.model.map.afCrmContactTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('afcrm_contact');
		$this->setPhpName('afCrmContact');
		$this->setClassname('afCrmContact');
		$this->setPackage('plugins.afCrmPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('ACCOUNT_ID', 'AccountId', 'INTEGER', 'afcrm_account', 'ID', false, null, null);
		$this->addColumn('FIRST_NAME', 'FirstName', 'VARCHAR', false, 255, null);
		$this->getColumn('FIRST_NAME', false)->setPrimaryString(true);
		$this->addColumn('LAST_NAME', 'LastName', 'VARCHAR', false, 255, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', false, 255, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255, null);
		$this->addColumn('PHONE_WORK', 'PhoneWork', 'VARCHAR', false, 255, null);
		$this->addColumn('PHONE_MOBILE', 'PhoneMobile', 'VARCHAR', false, 255, null);
		$this->addColumn('SKYPE', 'Skype', 'VARCHAR', false, 255, null);
		$this->addColumn('MSN', 'Msn', 'VARCHAR', false, 255, null);
		$this->addColumn('ADDRESS_LINE1', 'AddressLine1', 'VARCHAR', false, 255, null);
		$this->addColumn('ADDRESS_LINE2', 'AddressLine2', 'VARCHAR', false, 255, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', false, 255, null);
		$this->addColumn('ZIPCODE', 'Zipcode', 'VARCHAR', false, 255, null);
		$this->addColumn('STATE', 'State', 'VARCHAR', false, 255, null);
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('afCrmAccount', 'afCrmAccount', RelationMap::MANY_TO_ONE, array('account_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('afCrmOpportunity', 'afCrmOpportunity', RelationMap::ONE_TO_MANY, array('id' => 'assigned_to', ), 'CASCADE', null, 'afCrmOpportunitys');
		$this->addRelation('afCrmActivity', 'afCrmActivity', RelationMap::ONE_TO_MANY, array('id' => 'contact_id', ), 'CASCADE', null, 'afCrmActivitys');
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // afCrmContactTableMap
