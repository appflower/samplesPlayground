<?php


/**
 * Base class that represents a row from the 'afcrm_account' table.
 *
 * 
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmAccount extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'afCrmAccountPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        afCrmAccountPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the city field.
	 * @var        string
	 */
	protected $city;

	/**
	 * The value for the zipcode field.
	 * @var        string
	 */
	protected $zipcode;

	/**
	 * The value for the address_line1 field.
	 * @var        string
	 */
	protected $address_line1;

	/**
	 * The value for the address_line2 field.
	 * @var        string
	 */
	protected $address_line2;

	/**
	 * The value for the state field.
	 * @var        string
	 */
	protected $state;

	/**
	 * The value for the country field.
	 * @var        string
	 */
	protected $country;

	/**
	 * The value for the phone field.
	 * @var        string
	 */
	protected $phone;

	/**
	 * The value for the fax field.
	 * @var        string
	 */
	protected $fax;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the website field.
	 * @var        string
	 */
	protected $website;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * @var        array afCrmContact[] Collection to store aggregation of afCrmContact objects.
	 */
	protected $collafCrmContacts;

	/**
	 * @var        array afCrmOpportunity[] Collection to store aggregation of afCrmOpportunity objects.
	 */
	protected $collafCrmOpportunitys;

	/**
	 * @var        array afCrmActivity[] Collection to store aggregation of afCrmActivity objects.
	 */
	protected $collafCrmActivitys;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $afCrmContactsScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $afCrmOpportunitysScheduledForDeletion = null;

	/**
	 * An array of objects scheduled for deletion.
	 * @var		array
	 */
	protected $afCrmActivitysScheduledForDeletion = null;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [city] column value.
	 * 
	 * @return     string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Get the [zipcode] column value.
	 * 
	 * @return     string
	 */
	public function getZipcode()
	{
		return $this->zipcode;
	}

	/**
	 * Get the [address_line1] column value.
	 * 
	 * @return     string
	 */
	public function getAddressLine1()
	{
		return $this->address_line1;
	}

	/**
	 * Get the [address_line2] column value.
	 * 
	 * @return     string
	 */
	public function getAddressLine2()
	{
		return $this->address_line2;
	}

	/**
	 * Get the [state] column value.
	 * 
	 * @return     string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Get the [country] column value.
	 * 
	 * @return     string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Get the [phone] column value.
	 * 
	 * @return     string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Get the [fax] column value.
	 * 
	 * @return     string
	 */
	public function getFax()
	{
		return $this->fax;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [website] column value.
	 * 
	 * @return     string
	 */
	public function getWebsite()
	{
		return $this->website;
	}

	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [zipcode] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setZipcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zipcode !== $v) {
			$this->zipcode = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::ZIPCODE;
		}

		return $this;
	} // setZipcode()

	/**
	 * Set the value of [address_line1] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setAddressLine1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address_line1 !== $v) {
			$this->address_line1 = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::ADDRESS_LINE1;
		}

		return $this;
	} // setAddressLine1()

	/**
	 * Set the value of [address_line2] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setAddressLine2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address_line2 !== $v) {
			$this->address_line2 = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::ADDRESS_LINE2;
		}

		return $this;
	} // setAddressLine2()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v) {
			$this->state = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [phone] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setPhone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phone !== $v) {
			$this->phone = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::PHONE;
		}

		return $this;
	} // setPhone()

	/**
	 * Set the value of [fax] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::FAX;
		}

		return $this;
	} // setFax()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [website] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setWebsite($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->website !== $v) {
			$this->website = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::WEBSITE;
		}

		return $this;
	} // setWebsite()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = afCrmAccountPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->city = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->zipcode = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->address_line1 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->address_line2 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->state = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->country = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->phone = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->fax = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->email = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->website = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->description = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 13; // 13 = afCrmAccountPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating afCrmAccount object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(afCrmAccountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = afCrmAccountPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collafCrmContacts = null;

			$this->collafCrmOpportunitys = null;

			$this->collafCrmActivitys = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(afCrmAccountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = afCrmAccountQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseafCrmAccount:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseafCrmAccount:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(afCrmAccountPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseafCrmAccount:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseafCrmAccount:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				afCrmAccountPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			if ($this->afCrmContactsScheduledForDeletion !== null) {
				if (!$this->afCrmContactsScheduledForDeletion->isEmpty()) {
					afCrmContactQuery::create()
						->filterByPrimaryKeys($this->afCrmContactsScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->afCrmContactsScheduledForDeletion = null;
				}
			}

			if ($this->collafCrmContacts !== null) {
				foreach ($this->collafCrmContacts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->afCrmOpportunitysScheduledForDeletion !== null) {
				if (!$this->afCrmOpportunitysScheduledForDeletion->isEmpty()) {
					afCrmOpportunityQuery::create()
						->filterByPrimaryKeys($this->afCrmOpportunitysScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->afCrmOpportunitysScheduledForDeletion = null;
				}
			}

			if ($this->collafCrmOpportunitys !== null) {
				foreach ($this->collafCrmOpportunitys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->afCrmActivitysScheduledForDeletion !== null) {
				if (!$this->afCrmActivitysScheduledForDeletion->isEmpty()) {
					afCrmActivityQuery::create()
						->filterByPrimaryKeys($this->afCrmActivitysScheduledForDeletion->getPrimaryKeys(false))
						->delete($con);
					$this->afCrmActivitysScheduledForDeletion = null;
				}
			}

			if ($this->collafCrmActivitys !== null) {
				foreach ($this->collafCrmActivitys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = afCrmAccountPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . afCrmAccountPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(afCrmAccountPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::NAME)) {
			$modifiedColumns[':p' . $index++]  = '`NAME`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::CITY)) {
			$modifiedColumns[':p' . $index++]  = '`CITY`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::ZIPCODE)) {
			$modifiedColumns[':p' . $index++]  = '`ZIPCODE`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::ADDRESS_LINE1)) {
			$modifiedColumns[':p' . $index++]  = '`ADDRESS_LINE1`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::ADDRESS_LINE2)) {
			$modifiedColumns[':p' . $index++]  = '`ADDRESS_LINE2`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::STATE)) {
			$modifiedColumns[':p' . $index++]  = '`STATE`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::COUNTRY)) {
			$modifiedColumns[':p' . $index++]  = '`COUNTRY`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::PHONE)) {
			$modifiedColumns[':p' . $index++]  = '`PHONE`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::FAX)) {
			$modifiedColumns[':p' . $index++]  = '`FAX`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`EMAIL`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::WEBSITE)) {
			$modifiedColumns[':p' . $index++]  = '`WEBSITE`';
		}
		if ($this->isColumnModified(afCrmAccountPeer::DESCRIPTION)) {
			$modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
		}

		$sql = sprintf(
			'INSERT INTO `afcrm_account` (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case '`ID`':
						$stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
						break;
					case '`NAME`':
						$stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
						break;
					case '`CITY`':
						$stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
						break;
					case '`ZIPCODE`':
						$stmt->bindValue($identifier, $this->zipcode, PDO::PARAM_STR);
						break;
					case '`ADDRESS_LINE1`':
						$stmt->bindValue($identifier, $this->address_line1, PDO::PARAM_STR);
						break;
					case '`ADDRESS_LINE2`':
						$stmt->bindValue($identifier, $this->address_line2, PDO::PARAM_STR);
						break;
					case '`STATE`':
						$stmt->bindValue($identifier, $this->state, PDO::PARAM_STR);
						break;
					case '`COUNTRY`':
						$stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
						break;
					case '`PHONE`':
						$stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
						break;
					case '`FAX`':
						$stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
						break;
					case '`EMAIL`':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
						break;
					case '`WEBSITE`':
						$stmt->bindValue($identifier, $this->website, PDO::PARAM_STR);
						break;
					case '`DESCRIPTION`':
						$stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		try {
			$pk = $con->lastInsertId();
		} catch (Exception $e) {
			throw new PropelException('Unable to get autoincrement id.', $e);
		}
		$this->setId($pk);

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = afCrmAccountPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collafCrmContacts !== null) {
					foreach ($this->collafCrmContacts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafCrmOpportunitys !== null) {
					foreach ($this->collafCrmOpportunitys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collafCrmActivitys !== null) {
					foreach ($this->collafCrmActivitys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = afCrmAccountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getCity();
				break;
			case 3:
				return $this->getZipcode();
				break;
			case 4:
				return $this->getAddressLine1();
				break;
			case 5:
				return $this->getAddressLine2();
				break;
			case 6:
				return $this->getState();
				break;
			case 7:
				return $this->getCountry();
				break;
			case 8:
				return $this->getPhone();
				break;
			case 9:
				return $this->getFax();
				break;
			case 10:
				return $this->getEmail();
				break;
			case 11:
				return $this->getWebsite();
				break;
			case 12:
				return $this->getDescription();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['afCrmAccount'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['afCrmAccount'][$this->getPrimaryKey()] = true;
		$keys = afCrmAccountPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getCity(),
			$keys[3] => $this->getZipcode(),
			$keys[4] => $this->getAddressLine1(),
			$keys[5] => $this->getAddressLine2(),
			$keys[6] => $this->getState(),
			$keys[7] => $this->getCountry(),
			$keys[8] => $this->getPhone(),
			$keys[9] => $this->getFax(),
			$keys[10] => $this->getEmail(),
			$keys[11] => $this->getWebsite(),
			$keys[12] => $this->getDescription(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collafCrmContacts) {
				$result['afCrmContacts'] = $this->collafCrmContacts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collafCrmOpportunitys) {
				$result['afCrmOpportunitys'] = $this->collafCrmOpportunitys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collafCrmActivitys) {
				$result['afCrmActivitys'] = $this->collafCrmActivitys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = afCrmAccountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setCity($value);
				break;
			case 3:
				$this->setZipcode($value);
				break;
			case 4:
				$this->setAddressLine1($value);
				break;
			case 5:
				$this->setAddressLine2($value);
				break;
			case 6:
				$this->setState($value);
				break;
			case 7:
				$this->setCountry($value);
				break;
			case 8:
				$this->setPhone($value);
				break;
			case 9:
				$this->setFax($value);
				break;
			case 10:
				$this->setEmail($value);
				break;
			case 11:
				$this->setWebsite($value);
				break;
			case 12:
				$this->setDescription($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = afCrmAccountPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCity($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setZipcode($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAddressLine1($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddressLine2($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setState($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCountry($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPhone($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFax($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setEmail($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setWebsite($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDescription($arr[$keys[12]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(afCrmAccountPeer::DATABASE_NAME);

		if ($this->isColumnModified(afCrmAccountPeer::ID)) $criteria->add(afCrmAccountPeer::ID, $this->id);
		if ($this->isColumnModified(afCrmAccountPeer::NAME)) $criteria->add(afCrmAccountPeer::NAME, $this->name);
		if ($this->isColumnModified(afCrmAccountPeer::CITY)) $criteria->add(afCrmAccountPeer::CITY, $this->city);
		if ($this->isColumnModified(afCrmAccountPeer::ZIPCODE)) $criteria->add(afCrmAccountPeer::ZIPCODE, $this->zipcode);
		if ($this->isColumnModified(afCrmAccountPeer::ADDRESS_LINE1)) $criteria->add(afCrmAccountPeer::ADDRESS_LINE1, $this->address_line1);
		if ($this->isColumnModified(afCrmAccountPeer::ADDRESS_LINE2)) $criteria->add(afCrmAccountPeer::ADDRESS_LINE2, $this->address_line2);
		if ($this->isColumnModified(afCrmAccountPeer::STATE)) $criteria->add(afCrmAccountPeer::STATE, $this->state);
		if ($this->isColumnModified(afCrmAccountPeer::COUNTRY)) $criteria->add(afCrmAccountPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(afCrmAccountPeer::PHONE)) $criteria->add(afCrmAccountPeer::PHONE, $this->phone);
		if ($this->isColumnModified(afCrmAccountPeer::FAX)) $criteria->add(afCrmAccountPeer::FAX, $this->fax);
		if ($this->isColumnModified(afCrmAccountPeer::EMAIL)) $criteria->add(afCrmAccountPeer::EMAIL, $this->email);
		if ($this->isColumnModified(afCrmAccountPeer::WEBSITE)) $criteria->add(afCrmAccountPeer::WEBSITE, $this->website);
		if ($this->isColumnModified(afCrmAccountPeer::DESCRIPTION)) $criteria->add(afCrmAccountPeer::DESCRIPTION, $this->description);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(afCrmAccountPeer::DATABASE_NAME);
		$criteria->add(afCrmAccountPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of afCrmAccount (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setCity($this->getCity());
		$copyObj->setZipcode($this->getZipcode());
		$copyObj->setAddressLine1($this->getAddressLine1());
		$copyObj->setAddressLine2($this->getAddressLine2());
		$copyObj->setState($this->getState());
		$copyObj->setCountry($this->getCountry());
		$copyObj->setPhone($this->getPhone());
		$copyObj->setFax($this->getFax());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setWebsite($this->getWebsite());
		$copyObj->setDescription($this->getDescription());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getafCrmContacts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafCrmContact($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafCrmOpportunitys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafCrmOpportunity($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getafCrmActivitys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addafCrmActivity($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     afCrmAccount Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     afCrmAccountPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new afCrmAccountPeer();
		}
		return self::$peer;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('afCrmContact' == $relationName) {
			return $this->initafCrmContacts();
		}
		if ('afCrmOpportunity' == $relationName) {
			return $this->initafCrmOpportunitys();
		}
		if ('afCrmActivity' == $relationName) {
			return $this->initafCrmActivitys();
		}
	}

	/**
	 * Clears out the collafCrmContacts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafCrmContacts()
	 */
	public function clearafCrmContacts()
	{
		$this->collafCrmContacts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafCrmContacts collection.
	 *
	 * By default this just sets the collafCrmContacts collection to an empty array (like clearcollafCrmContacts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initafCrmContacts($overrideExisting = true)
	{
		if (null !== $this->collafCrmContacts && !$overrideExisting) {
			return;
		}
		$this->collafCrmContacts = new PropelObjectCollection();
		$this->collafCrmContacts->setModel('afCrmContact');
	}

	/**
	 * Gets an array of afCrmContact objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this afCrmAccount is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array afCrmContact[] List of afCrmContact objects
	 * @throws     PropelException
	 */
	public function getafCrmContacts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collafCrmContacts || null !== $criteria) {
			if ($this->isNew() && null === $this->collafCrmContacts) {
				// return empty collection
				$this->initafCrmContacts();
			} else {
				$collafCrmContacts = afCrmContactQuery::create(null, $criteria)
					->filterByafCrmAccount($this)
					->find($con);
				if (null !== $criteria) {
					return $collafCrmContacts;
				}
				$this->collafCrmContacts = $collafCrmContacts;
			}
		}
		return $this->collafCrmContacts;
	}

	/**
	 * Sets a collection of afCrmContact objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $afCrmContacts A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setafCrmContacts(PropelCollection $afCrmContacts, PropelPDO $con = null)
	{
		$this->afCrmContactsScheduledForDeletion = $this->getafCrmContacts(new Criteria(), $con)->diff($afCrmContacts);

		foreach ($afCrmContacts as $afCrmContact) {
			// Fix issue with collection modified by reference
			if ($afCrmContact->isNew()) {
				$afCrmContact->setafCrmAccount($this);
			}
			$this->addafCrmContact($afCrmContact);
		}

		$this->collafCrmContacts = $afCrmContacts;
	}

	/**
	 * Returns the number of related afCrmContact objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afCrmContact objects.
	 * @throws     PropelException
	 */
	public function countafCrmContacts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collafCrmContacts || null !== $criteria) {
			if ($this->isNew() && null === $this->collafCrmContacts) {
				return 0;
			} else {
				$query = afCrmContactQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByafCrmAccount($this)
					->count($con);
			}
		} else {
			return count($this->collafCrmContacts);
		}
	}

	/**
	 * Method called to associate a afCrmContact object to this object
	 * through the afCrmContact foreign key attribute.
	 *
	 * @param      afCrmContact $l afCrmContact
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function addafCrmContact(afCrmContact $l)
	{
		if ($this->collafCrmContacts === null) {
			$this->initafCrmContacts();
		}
		if (!$this->collafCrmContacts->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddafCrmContact($l);
		}

		return $this;
	}

	/**
	 * @param	afCrmContact $afCrmContact The afCrmContact object to add.
	 */
	protected function doAddafCrmContact($afCrmContact)
	{
		$this->collafCrmContacts[]= $afCrmContact;
		$afCrmContact->setafCrmAccount($this);
	}

	/**
	 * Clears out the collafCrmOpportunitys collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafCrmOpportunitys()
	 */
	public function clearafCrmOpportunitys()
	{
		$this->collafCrmOpportunitys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafCrmOpportunitys collection.
	 *
	 * By default this just sets the collafCrmOpportunitys collection to an empty array (like clearcollafCrmOpportunitys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initafCrmOpportunitys($overrideExisting = true)
	{
		if (null !== $this->collafCrmOpportunitys && !$overrideExisting) {
			return;
		}
		$this->collafCrmOpportunitys = new PropelObjectCollection();
		$this->collafCrmOpportunitys->setModel('afCrmOpportunity');
	}

	/**
	 * Gets an array of afCrmOpportunity objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this afCrmAccount is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array afCrmOpportunity[] List of afCrmOpportunity objects
	 * @throws     PropelException
	 */
	public function getafCrmOpportunitys($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collafCrmOpportunitys || null !== $criteria) {
			if ($this->isNew() && null === $this->collafCrmOpportunitys) {
				// return empty collection
				$this->initafCrmOpportunitys();
			} else {
				$collafCrmOpportunitys = afCrmOpportunityQuery::create(null, $criteria)
					->filterByafCrmAccount($this)
					->find($con);
				if (null !== $criteria) {
					return $collafCrmOpportunitys;
				}
				$this->collafCrmOpportunitys = $collafCrmOpportunitys;
			}
		}
		return $this->collafCrmOpportunitys;
	}

	/**
	 * Sets a collection of afCrmOpportunity objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $afCrmOpportunitys A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setafCrmOpportunitys(PropelCollection $afCrmOpportunitys, PropelPDO $con = null)
	{
		$this->afCrmOpportunitysScheduledForDeletion = $this->getafCrmOpportunitys(new Criteria(), $con)->diff($afCrmOpportunitys);

		foreach ($afCrmOpportunitys as $afCrmOpportunity) {
			// Fix issue with collection modified by reference
			if ($afCrmOpportunity->isNew()) {
				$afCrmOpportunity->setafCrmAccount($this);
			}
			$this->addafCrmOpportunity($afCrmOpportunity);
		}

		$this->collafCrmOpportunitys = $afCrmOpportunitys;
	}

	/**
	 * Returns the number of related afCrmOpportunity objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afCrmOpportunity objects.
	 * @throws     PropelException
	 */
	public function countafCrmOpportunitys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collafCrmOpportunitys || null !== $criteria) {
			if ($this->isNew() && null === $this->collafCrmOpportunitys) {
				return 0;
			} else {
				$query = afCrmOpportunityQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByafCrmAccount($this)
					->count($con);
			}
		} else {
			return count($this->collafCrmOpportunitys);
		}
	}

	/**
	 * Method called to associate a afCrmOpportunity object to this object
	 * through the afCrmOpportunity foreign key attribute.
	 *
	 * @param      afCrmOpportunity $l afCrmOpportunity
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function addafCrmOpportunity(afCrmOpportunity $l)
	{
		if ($this->collafCrmOpportunitys === null) {
			$this->initafCrmOpportunitys();
		}
		if (!$this->collafCrmOpportunitys->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddafCrmOpportunity($l);
		}

		return $this;
	}

	/**
	 * @param	afCrmOpportunity $afCrmOpportunity The afCrmOpportunity object to add.
	 */
	protected function doAddafCrmOpportunity($afCrmOpportunity)
	{
		$this->collafCrmOpportunitys[]= $afCrmOpportunity;
		$afCrmOpportunity->setafCrmAccount($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmAccount is new, it will return
	 * an empty collection; or if this afCrmAccount has previously
	 * been saved, it will retrieve related afCrmOpportunitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmAccount.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array afCrmOpportunity[] List of afCrmOpportunity objects
	 */
	public function getafCrmOpportunitysJoinafCrmContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = afCrmOpportunityQuery::create(null, $criteria);
		$query->joinWith('afCrmContact', $join_behavior);

		return $this->getafCrmOpportunitys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmAccount is new, it will return
	 * an empty collection; or if this afCrmAccount has previously
	 * been saved, it will retrieve related afCrmOpportunitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmAccount.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array afCrmOpportunity[] List of afCrmOpportunity objects
	 */
	public function getafCrmOpportunitysJoinafGuardUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = afCrmOpportunityQuery::create(null, $criteria);
		$query->joinWith('afGuardUser', $join_behavior);

		return $this->getafCrmOpportunitys($query, $con);
	}

	/**
	 * Clears out the collafCrmActivitys collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addafCrmActivitys()
	 */
	public function clearafCrmActivitys()
	{
		$this->collafCrmActivitys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collafCrmActivitys collection.
	 *
	 * By default this just sets the collafCrmActivitys collection to an empty array (like clearcollafCrmActivitys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initafCrmActivitys($overrideExisting = true)
	{
		if (null !== $this->collafCrmActivitys && !$overrideExisting) {
			return;
		}
		$this->collafCrmActivitys = new PropelObjectCollection();
		$this->collafCrmActivitys->setModel('afCrmActivity');
	}

	/**
	 * Gets an array of afCrmActivity objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this afCrmAccount is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array afCrmActivity[] List of afCrmActivity objects
	 * @throws     PropelException
	 */
	public function getafCrmActivitys($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collafCrmActivitys || null !== $criteria) {
			if ($this->isNew() && null === $this->collafCrmActivitys) {
				// return empty collection
				$this->initafCrmActivitys();
			} else {
				$collafCrmActivitys = afCrmActivityQuery::create(null, $criteria)
					->filterByafCrmAccount($this)
					->find($con);
				if (null !== $criteria) {
					return $collafCrmActivitys;
				}
				$this->collafCrmActivitys = $collafCrmActivitys;
			}
		}
		return $this->collafCrmActivitys;
	}

	/**
	 * Sets a collection of afCrmActivity objects related by a one-to-many relationship
	 * to the current object.
	 * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
	 * and new objects from the given Propel collection.
	 *
	 * @param      PropelCollection $afCrmActivitys A Propel collection.
	 * @param      PropelPDO $con Optional connection object
	 */
	public function setafCrmActivitys(PropelCollection $afCrmActivitys, PropelPDO $con = null)
	{
		$this->afCrmActivitysScheduledForDeletion = $this->getafCrmActivitys(new Criteria(), $con)->diff($afCrmActivitys);

		foreach ($afCrmActivitys as $afCrmActivity) {
			// Fix issue with collection modified by reference
			if ($afCrmActivity->isNew()) {
				$afCrmActivity->setafCrmAccount($this);
			}
			$this->addafCrmActivity($afCrmActivity);
		}

		$this->collafCrmActivitys = $afCrmActivitys;
	}

	/**
	 * Returns the number of related afCrmActivity objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related afCrmActivity objects.
	 * @throws     PropelException
	 */
	public function countafCrmActivitys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collafCrmActivitys || null !== $criteria) {
			if ($this->isNew() && null === $this->collafCrmActivitys) {
				return 0;
			} else {
				$query = afCrmActivityQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByafCrmAccount($this)
					->count($con);
			}
		} else {
			return count($this->collafCrmActivitys);
		}
	}

	/**
	 * Method called to associate a afCrmActivity object to this object
	 * through the afCrmActivity foreign key attribute.
	 *
	 * @param      afCrmActivity $l afCrmActivity
	 * @return     afCrmAccount The current object (for fluent API support)
	 */
	public function addafCrmActivity(afCrmActivity $l)
	{
		if ($this->collafCrmActivitys === null) {
			$this->initafCrmActivitys();
		}
		if (!$this->collafCrmActivitys->contains($l)) { // only add it if the **same** object is not already associated
			$this->doAddafCrmActivity($l);
		}

		return $this;
	}

	/**
	 * @param	afCrmActivity $afCrmActivity The afCrmActivity object to add.
	 */
	protected function doAddafCrmActivity($afCrmActivity)
	{
		$this->collafCrmActivitys[]= $afCrmActivity;
		$afCrmActivity->setafCrmAccount($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmAccount is new, it will return
	 * an empty collection; or if this afCrmAccount has previously
	 * been saved, it will retrieve related afCrmActivitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmAccount.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array afCrmActivity[] List of afCrmActivity objects
	 */
	public function getafCrmActivitysJoinafCrmContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = afCrmActivityQuery::create(null, $criteria);
		$query->joinWith('afCrmContact', $join_behavior);

		return $this->getafCrmActivitys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmAccount is new, it will return
	 * an empty collection; or if this afCrmAccount has previously
	 * been saved, it will retrieve related afCrmActivitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmAccount.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array afCrmActivity[] List of afCrmActivity objects
	 */
	public function getafCrmActivitysJoinafCrmStatus($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = afCrmActivityQuery::create(null, $criteria);
		$query->joinWith('afCrmStatus', $join_behavior);

		return $this->getafCrmActivitys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmAccount is new, it will return
	 * an empty collection; or if this afCrmAccount has previously
	 * been saved, it will retrieve related afCrmActivitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmAccount.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array afCrmActivity[] List of afCrmActivity objects
	 */
	public function getafCrmActivitysJoinafGuardUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = afCrmActivityQuery::create(null, $criteria);
		$query->joinWith('afGuardUser', $join_behavior);

		return $this->getafCrmActivitys($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->city = null;
		$this->zipcode = null;
		$this->address_line1 = null;
		$this->address_line2 = null;
		$this->state = null;
		$this->country = null;
		$this->phone = null;
		$this->fax = null;
		$this->email = null;
		$this->website = null;
		$this->description = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collafCrmContacts) {
				foreach ($this->collafCrmContacts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafCrmOpportunitys) {
				foreach ($this->collafCrmOpportunitys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collafCrmActivitys) {
				foreach ($this->collafCrmActivitys as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collafCrmContacts instanceof PropelCollection) {
			$this->collafCrmContacts->clearIterator();
		}
		$this->collafCrmContacts = null;
		if ($this->collafCrmOpportunitys instanceof PropelCollection) {
			$this->collafCrmOpportunitys->clearIterator();
		}
		$this->collafCrmOpportunitys = null;
		if ($this->collafCrmActivitys instanceof PropelCollection) {
			$this->collafCrmActivitys->clearIterator();
		}
		$this->collafCrmActivitys = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string The value of the 'name' column
	 */
	public function __toString()
	{
		return (string) $this->getName();
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseafCrmAccount:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseafCrmAccount
