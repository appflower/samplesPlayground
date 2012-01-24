<?php


/**
 * Base static class for performing query and update operations on the 'afcrm_activity' table.
 *
 * 
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmActivityPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'afcrm_activity';

	/** the related Propel class for this table */
	const OM_CLASS = 'afCrmActivity';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'plugins.afCrmPlugin.lib.model.afCrmActivity';

	/** the related TableMap class for this table */
	const TM_CLASS = 'afCrmActivityTableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 8;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 8;

	/** the column name for the ID field */
	const ID = 'afcrm_activity.ID';

	/** the column name for the SUBJECT field */
	const SUBJECT = 'afcrm_activity.SUBJECT';

	/** the column name for the ACCOUNT_ID field */
	const ACCOUNT_ID = 'afcrm_activity.ACCOUNT_ID';

	/** the column name for the CONTACT_ID field */
	const CONTACT_ID = 'afcrm_activity.CONTACT_ID';

	/** the column name for the STATUS_ID field */
	const STATUS_ID = 'afcrm_activity.STATUS_ID';

	/** the column name for the CREATED_BY field */
	const CREATED_BY = 'afcrm_activity.CREATED_BY';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'afcrm_activity.DESCRIPTION';

	/** the column name for the DUE_AT field */
	const DUE_AT = 'afcrm_activity.DUE_AT';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of afCrmActivity objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array afCrmActivity[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Subject', 'AccountId', 'ContactId', 'StatusId', 'CreatedBy', 'Description', 'DueAt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'subject', 'accountId', 'contactId', 'statusId', 'createdBy', 'description', 'dueAt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::SUBJECT, self::ACCOUNT_ID, self::CONTACT_ID, self::STATUS_ID, self::CREATED_BY, self::DESCRIPTION, self::DUE_AT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'SUBJECT', 'ACCOUNT_ID', 'CONTACT_ID', 'STATUS_ID', 'CREATED_BY', 'DESCRIPTION', 'DUE_AT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'subject', 'account_id', 'contact_id', 'status_id', 'created_by', 'description', 'due_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Subject' => 1, 'AccountId' => 2, 'ContactId' => 3, 'StatusId' => 4, 'CreatedBy' => 5, 'Description' => 6, 'DueAt' => 7, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'subject' => 1, 'accountId' => 2, 'contactId' => 3, 'statusId' => 4, 'createdBy' => 5, 'description' => 6, 'dueAt' => 7, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::SUBJECT => 1, self::ACCOUNT_ID => 2, self::CONTACT_ID => 3, self::STATUS_ID => 4, self::CREATED_BY => 5, self::DESCRIPTION => 6, self::DUE_AT => 7, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'SUBJECT' => 1, 'ACCOUNT_ID' => 2, 'CONTACT_ID' => 3, 'STATUS_ID' => 4, 'CREATED_BY' => 5, 'DESCRIPTION' => 6, 'DUE_AT' => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'subject' => 1, 'account_id' => 2, 'contact_id' => 3, 'status_id' => 4, 'created_by' => 5, 'description' => 6, 'due_at' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. afCrmActivityPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(afCrmActivityPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(afCrmActivityPeer::ID);
			$criteria->addSelectColumn(afCrmActivityPeer::SUBJECT);
			$criteria->addSelectColumn(afCrmActivityPeer::ACCOUNT_ID);
			$criteria->addSelectColumn(afCrmActivityPeer::CONTACT_ID);
			$criteria->addSelectColumn(afCrmActivityPeer::STATUS_ID);
			$criteria->addSelectColumn(afCrmActivityPeer::CREATED_BY);
			$criteria->addSelectColumn(afCrmActivityPeer::DESCRIPTION);
			$criteria->addSelectColumn(afCrmActivityPeer::DUE_AT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.SUBJECT');
			$criteria->addSelectColumn($alias . '.ACCOUNT_ID');
			$criteria->addSelectColumn($alias . '.CONTACT_ID');
			$criteria->addSelectColumn($alias . '.STATUS_ID');
			$criteria->addSelectColumn($alias . '.CREATED_BY');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.DUE_AT');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     afCrmActivity
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = afCrmActivityPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return afCrmActivityPeer::populateObjects(afCrmActivityPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}


		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      afCrmActivity $value A afCrmActivity object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A afCrmActivity object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof afCrmActivity) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or afCrmActivity object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     afCrmActivity Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to afcrm_activity
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = afCrmActivityPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = afCrmActivityPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				afCrmActivityPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (afCrmActivity object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = afCrmActivityPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + afCrmActivityPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = afCrmActivityPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			afCrmActivityPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afCrmAccount table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinafCrmAccount(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afCrmContact table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinafCrmContact(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afCrmStatus table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinafCrmStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afGuardUser table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinafGuardUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with their afCrmAccount objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinafCrmAccount(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;
		afCrmAccountPeer::addSelectColumns($criteria);

		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = afCrmAccountPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = afCrmAccountPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = afCrmAccountPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					afCrmAccountPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (afCrmActivity) to $obj2 (afCrmAccount)
				$obj2->addafCrmActivity($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with their afCrmContact objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinafCrmContact(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;
		afCrmContactPeer::addSelectColumns($criteria);

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = afCrmContactPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = afCrmContactPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = afCrmContactPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					afCrmContactPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (afCrmActivity) to $obj2 (afCrmContact)
				$obj2->addafCrmActivity($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with their afCrmStatus objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinafCrmStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;
		afCrmStatusPeer::addSelectColumns($criteria);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = afCrmStatusPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = afCrmStatusPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = afCrmStatusPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					afCrmStatusPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (afCrmActivity) to $obj2 (afCrmStatus)
				$obj2->addafCrmActivity($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with their afGuardUser objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinafGuardUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;
		afGuardUserPeer::addSelectColumns($criteria);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = afGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = afGuardUserPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = afGuardUserPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					afGuardUserPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (afCrmActivity) to $obj2 (afGuardUser)
				$obj2->addafCrmActivity($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of afCrmActivity objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol2 = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;

		afCrmAccountPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + afCrmAccountPeer::NUM_HYDRATE_COLUMNS;

		afCrmContactPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + afCrmContactPeer::NUM_HYDRATE_COLUMNS;

		afCrmStatusPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + afCrmStatusPeer::NUM_HYDRATE_COLUMNS;

		afGuardUserPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + afGuardUserPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined afCrmAccount rows

			$key2 = afCrmAccountPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = afCrmAccountPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = afCrmAccountPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					afCrmAccountPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj2 (afCrmAccount)
				$obj2->addafCrmActivity($obj1);
			} // if joined row not null

			// Add objects for joined afCrmContact rows

			$key3 = afCrmContactPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = afCrmContactPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = afCrmContactPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					afCrmContactPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj3 (afCrmContact)
				$obj3->addafCrmActivity($obj1);
			} // if joined row not null

			// Add objects for joined afCrmStatus rows

			$key4 = afCrmStatusPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = afCrmStatusPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = afCrmStatusPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					afCrmStatusPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj4 (afCrmStatus)
				$obj4->addafCrmActivity($obj1);
			} // if joined row not null

			// Add objects for joined afGuardUser rows

			$key5 = afGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = afGuardUserPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = afGuardUserPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					afGuardUserPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj5 (afGuardUser)
				$obj5->addafCrmActivity($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afCrmAccount table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptafCrmAccount(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afCrmContact table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptafCrmContact(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afCrmStatus table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptafCrmStatus(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related afGuardUser table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptafGuardUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			afCrmActivityPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY should not affect count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}

		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with all related objects except afCrmAccount.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptafCrmAccount(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol2 = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;

		afCrmContactPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + afCrmContactPeer::NUM_HYDRATE_COLUMNS;

		afCrmStatusPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + afCrmStatusPeer::NUM_HYDRATE_COLUMNS;

		afGuardUserPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + afGuardUserPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined afCrmContact rows

				$key2 = afCrmContactPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = afCrmContactPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = afCrmContactPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					afCrmContactPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj2 (afCrmContact)
				$obj2->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afCrmStatus rows

				$key3 = afCrmStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = afCrmStatusPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = afCrmStatusPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					afCrmStatusPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj3 (afCrmStatus)
				$obj3->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afGuardUser rows

				$key4 = afGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = afGuardUserPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = afGuardUserPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					afGuardUserPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj4 (afGuardUser)
				$obj4->addafCrmActivity($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with all related objects except afCrmContact.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptafCrmContact(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol2 = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;

		afCrmAccountPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + afCrmAccountPeer::NUM_HYDRATE_COLUMNS;

		afCrmStatusPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + afCrmStatusPeer::NUM_HYDRATE_COLUMNS;

		afGuardUserPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + afGuardUserPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined afCrmAccount rows

				$key2 = afCrmAccountPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = afCrmAccountPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = afCrmAccountPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					afCrmAccountPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj2 (afCrmAccount)
				$obj2->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afCrmStatus rows

				$key3 = afCrmStatusPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = afCrmStatusPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = afCrmStatusPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					afCrmStatusPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj3 (afCrmStatus)
				$obj3->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afGuardUser rows

				$key4 = afGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = afGuardUserPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = afGuardUserPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					afGuardUserPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj4 (afGuardUser)
				$obj4->addafCrmActivity($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with all related objects except afCrmStatus.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptafCrmStatus(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol2 = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;

		afCrmAccountPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + afCrmAccountPeer::NUM_HYDRATE_COLUMNS;

		afCrmContactPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + afCrmContactPeer::NUM_HYDRATE_COLUMNS;

		afGuardUserPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + afGuardUserPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CREATED_BY, afGuardUserPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined afCrmAccount rows

				$key2 = afCrmAccountPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = afCrmAccountPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = afCrmAccountPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					afCrmAccountPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj2 (afCrmAccount)
				$obj2->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afCrmContact rows

				$key3 = afCrmContactPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = afCrmContactPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = afCrmContactPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					afCrmContactPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj3 (afCrmContact)
				$obj3->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afGuardUser rows

				$key4 = afGuardUserPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = afGuardUserPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = afGuardUserPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					afGuardUserPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj4 (afGuardUser)
				$obj4->addafCrmActivity($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of afCrmActivity objects pre-filled with all related objects except afGuardUser.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of afCrmActivity objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptafGuardUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		afCrmActivityPeer::addSelectColumns($criteria);
		$startcol2 = afCrmActivityPeer::NUM_HYDRATE_COLUMNS;

		afCrmAccountPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + afCrmAccountPeer::NUM_HYDRATE_COLUMNS;

		afCrmContactPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + afCrmContactPeer::NUM_HYDRATE_COLUMNS;

		afCrmStatusPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + afCrmStatusPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(afCrmActivityPeer::ACCOUNT_ID, afCrmAccountPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::CONTACT_ID, afCrmContactPeer::ID, $join_behavior);

		$criteria->addJoin(afCrmActivityPeer::STATUS_ID, afCrmStatusPeer::ID, $join_behavior);

		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseafCrmActivityPeer', $criteria, $con);
		}


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = afCrmActivityPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = afCrmActivityPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = afCrmActivityPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				afCrmActivityPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined afCrmAccount rows

				$key2 = afCrmAccountPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = afCrmAccountPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = afCrmAccountPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					afCrmAccountPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj2 (afCrmAccount)
				$obj2->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afCrmContact rows

				$key3 = afCrmContactPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = afCrmContactPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = afCrmContactPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					afCrmContactPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj3 (afCrmContact)
				$obj3->addafCrmActivity($obj1);

			} // if joined row is not null

				// Add objects for joined afCrmStatus rows

				$key4 = afCrmStatusPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = afCrmStatusPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = afCrmStatusPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					afCrmStatusPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (afCrmActivity) to the collection in $obj4 (afCrmStatus)
				$obj4->addafCrmActivity($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseafCrmActivityPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseafCrmActivityPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new afCrmActivityTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? afCrmActivityPeer::CLASS_DEFAULT : afCrmActivityPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a afCrmActivity or Criteria object.
	 *
	 * @param      mixed $values Criteria or afCrmActivity object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from afCrmActivity object
		}

		if ($criteria->containsKey(afCrmActivityPeer::ID) && $criteria->keyContainsValue(afCrmActivityPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.afCrmActivityPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a afCrmActivity or Criteria object.
	 *
	 * @param      mixed $values Criteria or afCrmActivity object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(afCrmActivityPeer::ID);
			$value = $criteria->remove(afCrmActivityPeer::ID);
			if ($value) {
				$selectCriteria->add(afCrmActivityPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(afCrmActivityPeer::TABLE_NAME);
			}

		} else { // $values is afCrmActivity object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the afcrm_activity table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(afCrmActivityPeer::TABLE_NAME, $con, afCrmActivityPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			afCrmActivityPeer::clearInstancePool();
			afCrmActivityPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a afCrmActivity or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or afCrmActivity object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			afCrmActivityPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof afCrmActivity) { // it's a model object
			// invalidate the cache for this single object
			afCrmActivityPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(afCrmActivityPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				afCrmActivityPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			afCrmActivityPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given afCrmActivity object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      afCrmActivity $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(afCrmActivityPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(afCrmActivityPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(afCrmActivityPeer::DATABASE_NAME, afCrmActivityPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     afCrmActivity
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = afCrmActivityPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(afCrmActivityPeer::DATABASE_NAME);
		$criteria->add(afCrmActivityPeer::ID, $pk);

		$v = afCrmActivityPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(afCrmActivityPeer::DATABASE_NAME);
			$criteria->add(afCrmActivityPeer::ID, $pks, Criteria::IN);
			$objs = afCrmActivityPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseafCrmActivityPeer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseafCrmActivityPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseafCrmActivityPeer::buildTableMap();

