<?php


/**
 * Base class that represents a row from the 'afcrm_contact' table.
 *
 * 
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmContact extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'afCrmContactPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        afCrmContactPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the account_id field.
	 * @var        int
	 */
	protected $account_id;

	/**
	 * The value for the first_name field.
	 * @var        string
	 */
	protected $first_name;

	/**
	 * The value for the last_name field.
	 * @var        string
	 */
	protected $last_name;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the phone_work field.
	 * @var        string
	 */
	protected $phone_work;

	/**
	 * The value for the phone_mobile field.
	 * @var        string
	 */
	protected $phone_mobile;

	/**
	 * The value for the skype field.
	 * @var        string
	 */
	protected $skype;

	/**
	 * The value for the msn field.
	 * @var        string
	 */
	protected $msn;

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
	 * @var        afCrmAccount
	 */
	protected $aafCrmAccount;

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
	 * Get the [account_id] column value.
	 * 
	 * @return     int
	 */
	public function getAccountId()
	{
		return $this->account_id;
	}

	/**
	 * Get the [first_name] column value.
	 * 
	 * @return     string
	 */
	public function getFirstName()
	{
		return $this->first_name;
	}

	/**
	 * Get the [last_name] column value.
	 * 
	 * @return     string
	 */
	public function getLastName()
	{
		return $this->last_name;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
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
	 * Get the [phone_work] column value.
	 * 
	 * @return     string
	 */
	public function getPhoneWork()
	{
		return $this->phone_work;
	}

	/**
	 * Get the [phone_mobile] column value.
	 * 
	 * @return     string
	 */
	public function getPhoneMobile()
	{
		return $this->phone_mobile;
	}

	/**
	 * Get the [skype] column value.
	 * 
	 * @return     string
	 */
	public function getSkype()
	{
		return $this->skype;
	}

	/**
	 * Get the [msn] column value.
	 * 
	 * @return     string
	 */
	public function getMsn()
	{
		return $this->msn;
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = afCrmContactPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [account_id] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setAccountId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->account_id !== $v) {
			$this->account_id = $v;
			$this->modifiedColumns[] = afCrmContactPeer::ACCOUNT_ID;
		}

		if ($this->aafCrmAccount !== null && $this->aafCrmAccount->getId() !== $v) {
			$this->aafCrmAccount = null;
		}

		return $this;
	} // setAccountId()

	/**
	 * Set the value of [first_name] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setFirstName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->first_name !== $v) {
			$this->first_name = $v;
			$this->modifiedColumns[] = afCrmContactPeer::FIRST_NAME;
		}

		return $this;
	} // setFirstName()

	/**
	 * Set the value of [last_name] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setLastName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->last_name !== $v) {
			$this->last_name = $v;
			$this->modifiedColumns[] = afCrmContactPeer::LAST_NAME;
		}

		return $this;
	} // setLastName()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = afCrmContactPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = afCrmContactPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [phone_work] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setPhoneWork($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phone_work !== $v) {
			$this->phone_work = $v;
			$this->modifiedColumns[] = afCrmContactPeer::PHONE_WORK;
		}

		return $this;
	} // setPhoneWork()

	/**
	 * Set the value of [phone_mobile] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setPhoneMobile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phone_mobile !== $v) {
			$this->phone_mobile = $v;
			$this->modifiedColumns[] = afCrmContactPeer::PHONE_MOBILE;
		}

		return $this;
	} // setPhoneMobile()

	/**
	 * Set the value of [skype] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setSkype($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->skype !== $v) {
			$this->skype = $v;
			$this->modifiedColumns[] = afCrmContactPeer::SKYPE;
		}

		return $this;
	} // setSkype()

	/**
	 * Set the value of [msn] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setMsn($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->msn !== $v) {
			$this->msn = $v;
			$this->modifiedColumns[] = afCrmContactPeer::MSN;
		}

		return $this;
	} // setMsn()

	/**
	 * Set the value of [address_line1] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setAddressLine1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address_line1 !== $v) {
			$this->address_line1 = $v;
			$this->modifiedColumns[] = afCrmContactPeer::ADDRESS_LINE1;
		}

		return $this;
	} // setAddressLine1()

	/**
	 * Set the value of [address_line2] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setAddressLine2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address_line2 !== $v) {
			$this->address_line2 = $v;
			$this->modifiedColumns[] = afCrmContactPeer::ADDRESS_LINE2;
		}

		return $this;
	} // setAddressLine2()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = afCrmContactPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [zipcode] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setZipcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zipcode !== $v) {
			$this->zipcode = $v;
			$this->modifiedColumns[] = afCrmContactPeer::ZIPCODE;
		}

		return $this;
	} // setZipcode()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v) {
			$this->state = $v;
			$this->modifiedColumns[] = afCrmContactPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmContact The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = afCrmContactPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

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
			$this->account_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->first_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->last_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->title = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->phone_work = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->phone_mobile = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->skype = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->msn = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->address_line1 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->address_line2 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->city = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->zipcode = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->state = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->country = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 16; // 16 = afCrmContactPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating afCrmContact object", $e);
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

		if ($this->aafCrmAccount !== null && $this->account_id !== $this->aafCrmAccount->getId()) {
			$this->aafCrmAccount = null;
		}
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
			$con = Propel::getConnection(afCrmContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = afCrmContactPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aafCrmAccount = null;
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
			$con = Propel::getConnection(afCrmContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = afCrmContactQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseafCrmContact:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseafCrmContact:delete:post') as $callable)
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
			$con = Propel::getConnection(afCrmContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseafCrmContact:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseafCrmContact:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				afCrmContactPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aafCrmAccount !== null) {
				if ($this->aafCrmAccount->isModified() || $this->aafCrmAccount->isNew()) {
					$affectedRows += $this->aafCrmAccount->save($con);
				}
				$this->setafCrmAccount($this->aafCrmAccount);
			}

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

		$this->modifiedColumns[] = afCrmContactPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . afCrmContactPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(afCrmContactPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(afCrmContactPeer::ACCOUNT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`ACCOUNT_ID`';
		}
		if ($this->isColumnModified(afCrmContactPeer::FIRST_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`FIRST_NAME`';
		}
		if ($this->isColumnModified(afCrmContactPeer::LAST_NAME)) {
			$modifiedColumns[':p' . $index++]  = '`LAST_NAME`';
		}
		if ($this->isColumnModified(afCrmContactPeer::TITLE)) {
			$modifiedColumns[':p' . $index++]  = '`TITLE`';
		}
		if ($this->isColumnModified(afCrmContactPeer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = '`EMAIL`';
		}
		if ($this->isColumnModified(afCrmContactPeer::PHONE_WORK)) {
			$modifiedColumns[':p' . $index++]  = '`PHONE_WORK`';
		}
		if ($this->isColumnModified(afCrmContactPeer::PHONE_MOBILE)) {
			$modifiedColumns[':p' . $index++]  = '`PHONE_MOBILE`';
		}
		if ($this->isColumnModified(afCrmContactPeer::SKYPE)) {
			$modifiedColumns[':p' . $index++]  = '`SKYPE`';
		}
		if ($this->isColumnModified(afCrmContactPeer::MSN)) {
			$modifiedColumns[':p' . $index++]  = '`MSN`';
		}
		if ($this->isColumnModified(afCrmContactPeer::ADDRESS_LINE1)) {
			$modifiedColumns[':p' . $index++]  = '`ADDRESS_LINE1`';
		}
		if ($this->isColumnModified(afCrmContactPeer::ADDRESS_LINE2)) {
			$modifiedColumns[':p' . $index++]  = '`ADDRESS_LINE2`';
		}
		if ($this->isColumnModified(afCrmContactPeer::CITY)) {
			$modifiedColumns[':p' . $index++]  = '`CITY`';
		}
		if ($this->isColumnModified(afCrmContactPeer::ZIPCODE)) {
			$modifiedColumns[':p' . $index++]  = '`ZIPCODE`';
		}
		if ($this->isColumnModified(afCrmContactPeer::STATE)) {
			$modifiedColumns[':p' . $index++]  = '`STATE`';
		}
		if ($this->isColumnModified(afCrmContactPeer::COUNTRY)) {
			$modifiedColumns[':p' . $index++]  = '`COUNTRY`';
		}

		$sql = sprintf(
			'INSERT INTO `afcrm_contact` (%s) VALUES (%s)',
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
					case '`ACCOUNT_ID`':
						$stmt->bindValue($identifier, $this->account_id, PDO::PARAM_INT);
						break;
					case '`FIRST_NAME`':
						$stmt->bindValue($identifier, $this->first_name, PDO::PARAM_STR);
						break;
					case '`LAST_NAME`':
						$stmt->bindValue($identifier, $this->last_name, PDO::PARAM_STR);
						break;
					case '`TITLE`':
						$stmt->bindValue($identifier, $this->title, PDO::PARAM_STR);
						break;
					case '`EMAIL`':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
						break;
					case '`PHONE_WORK`':
						$stmt->bindValue($identifier, $this->phone_work, PDO::PARAM_STR);
						break;
					case '`PHONE_MOBILE`':
						$stmt->bindValue($identifier, $this->phone_mobile, PDO::PARAM_STR);
						break;
					case '`SKYPE`':
						$stmt->bindValue($identifier, $this->skype, PDO::PARAM_STR);
						break;
					case '`MSN`':
						$stmt->bindValue($identifier, $this->msn, PDO::PARAM_STR);
						break;
					case '`ADDRESS_LINE1`':
						$stmt->bindValue($identifier, $this->address_line1, PDO::PARAM_STR);
						break;
					case '`ADDRESS_LINE2`':
						$stmt->bindValue($identifier, $this->address_line2, PDO::PARAM_STR);
						break;
					case '`CITY`':
						$stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
						break;
					case '`ZIPCODE`':
						$stmt->bindValue($identifier, $this->zipcode, PDO::PARAM_STR);
						break;
					case '`STATE`':
						$stmt->bindValue($identifier, $this->state, PDO::PARAM_STR);
						break;
					case '`COUNTRY`':
						$stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aafCrmAccount !== null) {
				if (!$this->aafCrmAccount->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aafCrmAccount->getValidationFailures());
				}
			}


			if (($retval = afCrmContactPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = afCrmContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAccountId();
				break;
			case 2:
				return $this->getFirstName();
				break;
			case 3:
				return $this->getLastName();
				break;
			case 4:
				return $this->getTitle();
				break;
			case 5:
				return $this->getEmail();
				break;
			case 6:
				return $this->getPhoneWork();
				break;
			case 7:
				return $this->getPhoneMobile();
				break;
			case 8:
				return $this->getSkype();
				break;
			case 9:
				return $this->getMsn();
				break;
			case 10:
				return $this->getAddressLine1();
				break;
			case 11:
				return $this->getAddressLine2();
				break;
			case 12:
				return $this->getCity();
				break;
			case 13:
				return $this->getZipcode();
				break;
			case 14:
				return $this->getState();
				break;
			case 15:
				return $this->getCountry();
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
		if (isset($alreadyDumpedObjects['afCrmContact'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['afCrmContact'][$this->getPrimaryKey()] = true;
		$keys = afCrmContactPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAccountId(),
			$keys[2] => $this->getFirstName(),
			$keys[3] => $this->getLastName(),
			$keys[4] => $this->getTitle(),
			$keys[5] => $this->getEmail(),
			$keys[6] => $this->getPhoneWork(),
			$keys[7] => $this->getPhoneMobile(),
			$keys[8] => $this->getSkype(),
			$keys[9] => $this->getMsn(),
			$keys[10] => $this->getAddressLine1(),
			$keys[11] => $this->getAddressLine2(),
			$keys[12] => $this->getCity(),
			$keys[13] => $this->getZipcode(),
			$keys[14] => $this->getState(),
			$keys[15] => $this->getCountry(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aafCrmAccount) {
				$result['afCrmAccount'] = $this->aafCrmAccount->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = afCrmContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAccountId($value);
				break;
			case 2:
				$this->setFirstName($value);
				break;
			case 3:
				$this->setLastName($value);
				break;
			case 4:
				$this->setTitle($value);
				break;
			case 5:
				$this->setEmail($value);
				break;
			case 6:
				$this->setPhoneWork($value);
				break;
			case 7:
				$this->setPhoneMobile($value);
				break;
			case 8:
				$this->setSkype($value);
				break;
			case 9:
				$this->setMsn($value);
				break;
			case 10:
				$this->setAddressLine1($value);
				break;
			case 11:
				$this->setAddressLine2($value);
				break;
			case 12:
				$this->setCity($value);
				break;
			case 13:
				$this->setZipcode($value);
				break;
			case 14:
				$this->setState($value);
				break;
			case 15:
				$this->setCountry($value);
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
		$keys = afCrmContactPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAccountId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFirstName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLastName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTitle($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEmail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPhoneWork($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPhoneMobile($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSkype($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMsn($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAddressLine1($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAddressLine2($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCity($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setZipcode($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setState($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCountry($arr[$keys[15]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(afCrmContactPeer::DATABASE_NAME);

		if ($this->isColumnModified(afCrmContactPeer::ID)) $criteria->add(afCrmContactPeer::ID, $this->id);
		if ($this->isColumnModified(afCrmContactPeer::ACCOUNT_ID)) $criteria->add(afCrmContactPeer::ACCOUNT_ID, $this->account_id);
		if ($this->isColumnModified(afCrmContactPeer::FIRST_NAME)) $criteria->add(afCrmContactPeer::FIRST_NAME, $this->first_name);
		if ($this->isColumnModified(afCrmContactPeer::LAST_NAME)) $criteria->add(afCrmContactPeer::LAST_NAME, $this->last_name);
		if ($this->isColumnModified(afCrmContactPeer::TITLE)) $criteria->add(afCrmContactPeer::TITLE, $this->title);
		if ($this->isColumnModified(afCrmContactPeer::EMAIL)) $criteria->add(afCrmContactPeer::EMAIL, $this->email);
		if ($this->isColumnModified(afCrmContactPeer::PHONE_WORK)) $criteria->add(afCrmContactPeer::PHONE_WORK, $this->phone_work);
		if ($this->isColumnModified(afCrmContactPeer::PHONE_MOBILE)) $criteria->add(afCrmContactPeer::PHONE_MOBILE, $this->phone_mobile);
		if ($this->isColumnModified(afCrmContactPeer::SKYPE)) $criteria->add(afCrmContactPeer::SKYPE, $this->skype);
		if ($this->isColumnModified(afCrmContactPeer::MSN)) $criteria->add(afCrmContactPeer::MSN, $this->msn);
		if ($this->isColumnModified(afCrmContactPeer::ADDRESS_LINE1)) $criteria->add(afCrmContactPeer::ADDRESS_LINE1, $this->address_line1);
		if ($this->isColumnModified(afCrmContactPeer::ADDRESS_LINE2)) $criteria->add(afCrmContactPeer::ADDRESS_LINE2, $this->address_line2);
		if ($this->isColumnModified(afCrmContactPeer::CITY)) $criteria->add(afCrmContactPeer::CITY, $this->city);
		if ($this->isColumnModified(afCrmContactPeer::ZIPCODE)) $criteria->add(afCrmContactPeer::ZIPCODE, $this->zipcode);
		if ($this->isColumnModified(afCrmContactPeer::STATE)) $criteria->add(afCrmContactPeer::STATE, $this->state);
		if ($this->isColumnModified(afCrmContactPeer::COUNTRY)) $criteria->add(afCrmContactPeer::COUNTRY, $this->country);

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
		$criteria = new Criteria(afCrmContactPeer::DATABASE_NAME);
		$criteria->add(afCrmContactPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of afCrmContact (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAccountId($this->getAccountId());
		$copyObj->setFirstName($this->getFirstName());
		$copyObj->setLastName($this->getLastName());
		$copyObj->setTitle($this->getTitle());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setPhoneWork($this->getPhoneWork());
		$copyObj->setPhoneMobile($this->getPhoneMobile());
		$copyObj->setSkype($this->getSkype());
		$copyObj->setMsn($this->getMsn());
		$copyObj->setAddressLine1($this->getAddressLine1());
		$copyObj->setAddressLine2($this->getAddressLine2());
		$copyObj->setCity($this->getCity());
		$copyObj->setZipcode($this->getZipcode());
		$copyObj->setState($this->getState());
		$copyObj->setCountry($this->getCountry());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

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
	 * @return     afCrmContact Clone of current object.
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
	 * @return     afCrmContactPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new afCrmContactPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a afCrmAccount object.
	 *
	 * @param      afCrmAccount $v
	 * @return     afCrmContact The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setafCrmAccount(afCrmAccount $v = null)
	{
		if ($v === null) {
			$this->setAccountId(NULL);
		} else {
			$this->setAccountId($v->getId());
		}

		$this->aafCrmAccount = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the afCrmAccount object, it will not be re-added.
		if ($v !== null) {
			$v->addafCrmContact($this);
		}

		return $this;
	}


	/**
	 * Get the associated afCrmAccount object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     afCrmAccount The associated afCrmAccount object.
	 * @throws     PropelException
	 */
	public function getafCrmAccount(PropelPDO $con = null)
	{
		if ($this->aafCrmAccount === null && ($this->account_id !== null)) {
			$this->aafCrmAccount = afCrmAccountQuery::create()->findPk($this->account_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aafCrmAccount->addafCrmContacts($this);
			 */
		}
		return $this->aafCrmAccount;
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
		if ('afCrmOpportunity' == $relationName) {
			return $this->initafCrmOpportunitys();
		}
		if ('afCrmActivity' == $relationName) {
			return $this->initafCrmActivitys();
		}
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
	 * If this afCrmContact is new, it will return
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
					->filterByafCrmContact($this)
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
				$afCrmOpportunity->setafCrmContact($this);
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
					->filterByafCrmContact($this)
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
	 * @return     afCrmContact The current object (for fluent API support)
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
		$afCrmOpportunity->setafCrmContact($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmContact is new, it will return
	 * an empty collection; or if this afCrmContact has previously
	 * been saved, it will retrieve related afCrmOpportunitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array afCrmOpportunity[] List of afCrmOpportunity objects
	 */
	public function getafCrmOpportunitysJoinafCrmAccount($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = afCrmOpportunityQuery::create(null, $criteria);
		$query->joinWith('afCrmAccount', $join_behavior);

		return $this->getafCrmOpportunitys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmContact is new, it will return
	 * an empty collection; or if this afCrmContact has previously
	 * been saved, it will retrieve related afCrmOpportunitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmContact.
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
	 * If this afCrmContact is new, it will return
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
					->filterByafCrmContact($this)
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
				$afCrmActivity->setafCrmContact($this);
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
					->filterByafCrmContact($this)
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
	 * @return     afCrmContact The current object (for fluent API support)
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
		$afCrmActivity->setafCrmContact($this);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmContact is new, it will return
	 * an empty collection; or if this afCrmContact has previously
	 * been saved, it will retrieve related afCrmActivitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array afCrmActivity[] List of afCrmActivity objects
	 */
	public function getafCrmActivitysJoinafCrmAccount($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = afCrmActivityQuery::create(null, $criteria);
		$query->joinWith('afCrmAccount', $join_behavior);

		return $this->getafCrmActivitys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this afCrmContact is new, it will return
	 * an empty collection; or if this afCrmContact has previously
	 * been saved, it will retrieve related afCrmActivitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmContact.
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
	 * Otherwise if this afCrmContact is new, it will return
	 * an empty collection; or if this afCrmContact has previously
	 * been saved, it will retrieve related afCrmActivitys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in afCrmContact.
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
		$this->account_id = null;
		$this->first_name = null;
		$this->last_name = null;
		$this->title = null;
		$this->email = null;
		$this->phone_work = null;
		$this->phone_mobile = null;
		$this->skype = null;
		$this->msn = null;
		$this->address_line1 = null;
		$this->address_line2 = null;
		$this->city = null;
		$this->zipcode = null;
		$this->state = null;
		$this->country = null;
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

		if ($this->collafCrmOpportunitys instanceof PropelCollection) {
			$this->collafCrmOpportunitys->clearIterator();
		}
		$this->collafCrmOpportunitys = null;
		if ($this->collafCrmActivitys instanceof PropelCollection) {
			$this->collafCrmActivitys->clearIterator();
		}
		$this->collafCrmActivitys = null;
		$this->aafCrmAccount = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string The value of the 'first_name' column
	 */
	public function __toString()
	{
		return (string) $this->getFirstName();
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseafCrmContact:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseafCrmContact
