<?php



/**
 * This class defines the structure of the 'afcrm_activity' table.
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
class afCrmActivityTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'plugins.afCrmPlugin.lib.model.map.afCrmActivityTableMap';

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
		$this->setName('afcrm_activity');
		$this->setPhpName('afCrmActivity');
		$this->setClassname('afCrmActivity');
		$this->setPackage('plugins.afCrmPlugin.lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('SUBJECT', 'Subject', 'VARCHAR', false, 255, null);
		$this->getColumn('SUBJECT', false)->setPrimaryString(true);
		$this->addForeignKey('ACCOUNT_ID', 'AccountId', 'INTEGER', 'afcrm_account', 'ID', false, null, null);
		$this->addForeignKey('CONTACT_ID', 'ContactId', 'INTEGER', 'afcrm_contact', 'ID', false, null, null);
		$this->addForeignKey('STATUS_ID', 'StatusId', 'INTEGER', 'afcrm_status', 'ID', false, null, null);
		$this->addForeignKey('CREATED_BY', 'CreatedBy', 'INTEGER', 'af_guard_user', 'ID', false, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, null, null);
		$this->addColumn('DUE_AT', 'DueAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('afCrmAccount', 'afCrmAccount', RelationMap::MANY_TO_ONE, array('account_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('afCrmContact', 'afCrmContact', RelationMap::MANY_TO_ONE, array('contact_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('afCrmStatus', 'afCrmStatus', RelationMap::MANY_TO_ONE, array('status_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('afGuardUser', 'afGuardUser', RelationMap::MANY_TO_ONE, array('created_by' => 'id', ), 'CASCADE', null);
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

} // afCrmActivityTableMap
