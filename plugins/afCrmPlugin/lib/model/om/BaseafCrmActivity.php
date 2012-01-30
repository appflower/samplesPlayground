<?php


/**
 * Base class that represents a row from the 'afcrm_activity' table.
 *
 * 
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmActivity extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'afCrmActivityPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        afCrmActivityPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the subject field.
	 * @var        string
	 */
	protected $subject;

	/**
	 * The value for the account_id field.
	 * @var        int
	 */
	protected $account_id;

	/**
	 * The value for the contact_id field.
	 * @var        int
	 */
	protected $contact_id;

	/**
	 * The value for the status_id field.
	 * @var        int
	 */
	protected $status_id;

	/**
	 * The value for the created_by field.
	 * @var        int
	 */
	protected $created_by;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the due_at field.
	 * @var        string
	 */
	protected $due_at;

	/**
	 * @var        afCrmAccount
	 */
	protected $aafCrmAccount;

	/**
	 * @var        afCrmContact
	 */
	protected $aafCrmContact;

	/**
	 * @var        afCrmStatus
	 */
	protected $aafCrmStatus;

	/**
	 * @var        afGuardUser
	 */
	protected $aafGuardUser;

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
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [subject] column value.
	 * 
	 * @return     string
	 */
	public function getSubject()
	{
		return $this->subject;
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
	 * Get the [contact_id] column value.
	 * 
	 * @return     int
	 */
	public function getContactId()
	{
		return $this->contact_id;
	}

	/**
	 * Get the [status_id] column value.
	 * 
	 * @return     int
	 */
	public function getStatusId()
	{
		return $this->status_id;
	}

	/**
	 * Get the [created_by] column value.
	 * 
	 * @return     int
	 */
	public function getCreatedBy()
	{
		return $this->created_by;
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
	 * Get the [optionally formatted] temporal [due_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDueAt($format = 'Y-m-d H:i:s')
	{
		if ($this->due_at === null) {
			return null;
		}


		if ($this->due_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->due_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->due_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = afCrmActivityPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [subject] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setSubject($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subject !== $v) {
			$this->subject = $v;
			$this->modifiedColumns[] = afCrmActivityPeer::SUBJECT;
		}

		return $this;
	} // setSubject()

	/**
	 * Set the value of [account_id] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setAccountId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->account_id !== $v) {
			$this->account_id = $v;
			$this->modifiedColumns[] = afCrmActivityPeer::ACCOUNT_ID;
		}

		if ($this->aafCrmAccount !== null && $this->aafCrmAccount->getId() !== $v) {
			$this->aafCrmAccount = null;
		}

		return $this;
	} // setAccountId()

	/**
	 * Set the value of [contact_id] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setContactId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->contact_id !== $v) {
			$this->contact_id = $v;
			$this->modifiedColumns[] = afCrmActivityPeer::CONTACT_ID;
		}

		if ($this->aafCrmContact !== null && $this->aafCrmContact->getId() !== $v) {
			$this->aafCrmContact = null;
		}

		return $this;
	} // setContactId()

	/**
	 * Set the value of [status_id] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setStatusId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->status_id !== $v) {
			$this->status_id = $v;
			$this->modifiedColumns[] = afCrmActivityPeer::STATUS_ID;
		}

		if ($this->aafCrmStatus !== null && $this->aafCrmStatus->getId() !== $v) {
			$this->aafCrmStatus = null;
		}

		return $this;
	} // setStatusId()

	/**
	 * Set the value of [created_by] column.
	 * 
	 * @param      int $v new value
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setCreatedBy($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = afCrmActivityPeer::CREATED_BY;
		}

		if ($this->aafGuardUser !== null && $this->aafGuardUser->getId() !== $v) {
			$this->aafGuardUser = null;
		}

		return $this;
	} // setCreatedBy()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = afCrmActivityPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Sets the value of [due_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     afCrmActivity The current object (for fluent API support)
	 */
	public function setDueAt($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->due_at !== null || $dt !== null) {
			$currentDateAsString = ($this->due_at !== null && $tmpDt = new DateTime($this->due_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->due_at = $newDateAsString;
				$this->modifiedColumns[] = afCrmActivityPeer::DUE_AT;
			}
		} // if either are not null

		return $this;
	} // setDueAt()

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
			$this->subject = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->account_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->contact_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->status_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->created_by = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->description = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->due_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = afCrmActivityPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating afCrmActivity object", $e);
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
		if ($this->aafCrmContact !== null && $this->contact_id !== $this->aafCrmContact->getId()) {
			$this->aafCrmContact = null;
		}
		if ($this->aafCrmStatus !== null && $this->status_id !== $this->aafCrmStatus->getId()) {
			$this->aafCrmStatus = null;
		}
		if ($this->aafGuardUser !== null && $this->created_by !== $this->aafGuardUser->getId()) {
			$this->aafGuardUser = null;
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
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = afCrmActivityPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aafCrmAccount = null;
			$this->aafCrmContact = null;
			$this->aafCrmStatus = null;
			$this->aafGuardUser = null;
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
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = afCrmActivityQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseafCrmActivity:delete:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseafCrmActivity:delete:post') as $callable)
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
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseafCrmActivity:save:pre') as $callable)
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
				foreach (sfMixer::getCallables('BaseafCrmActivity:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				afCrmActivityPeer::addInstanceToPool($this);
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

			if ($this->aafCrmContact !== null) {
				if ($this->aafCrmContact->isModified() || $this->aafCrmContact->isNew()) {
					$affectedRows += $this->aafCrmContact->save($con);
				}
				$this->setafCrmContact($this->aafCrmContact);
			}

			if ($this->aafCrmStatus !== null) {
				if ($this->aafCrmStatus->isModified() || $this->aafCrmStatus->isNew()) {
					$affectedRows += $this->aafCrmStatus->save($con);
				}
				$this->setafCrmStatus($this->aafCrmStatus);
			}

			if ($this->aafGuardUser !== null) {
				if ($this->aafGuardUser->isModified() || $this->aafGuardUser->isNew()) {
					$affectedRows += $this->aafGuardUser->save($con);
				}
				$this->setafGuardUser($this->aafGuardUser);
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

		$this->modifiedColumns[] = afCrmActivityPeer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . afCrmActivityPeer::ID . ')');
		}

		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(afCrmActivityPeer::ID)) {
			$modifiedColumns[':p' . $index++]  = '`ID`';
		}
		if ($this->isColumnModified(afCrmActivityPeer::SUBJECT)) {
			$modifiedColumns[':p' . $index++]  = '`SUBJECT`';
		}
		if ($this->isColumnModified(afCrmActivityPeer::ACCOUNT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`ACCOUNT_ID`';
		}
		if ($this->isColumnModified(afCrmActivityPeer::CONTACT_ID)) {
			$modifiedColumns[':p' . $index++]  = '`CONTACT_ID`';
		}
		if ($this->isColumnModified(afCrmActivityPeer::STATUS_ID)) {
			$modifiedColumns[':p' . $index++]  = '`STATUS_ID`';
		}
		if ($this->isColumnModified(afCrmActivityPeer::CREATED_BY)) {
			$modifiedColumns[':p' . $index++]  = '`CREATED_BY`';
		}
		if ($this->isColumnModified(afCrmActivityPeer::DESCRIPTION)) {
			$modifiedColumns[':p' . $index++]  = '`DESCRIPTION`';
		}
		if ($this->isColumnModified(afCrmActivityPeer::DUE_AT)) {
			$modifiedColumns[':p' . $index++]  = '`DUE_AT`';
		}

		$sql = sprintf(
			'INSERT INTO `afcrm_activity` (%s) VALUES (%s)',
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
					case '`SUBJECT`':						
						$stmt->bindValue($identifier, $this->subject, PDO::PARAM_STR);
						break;
					case '`ACCOUNT_ID`':						
						$stmt->bindValue($identifier, $this->account_id, PDO::PARAM_INT);
						break;
					case '`CONTACT_ID`':						
						$stmt->bindValue($identifier, $this->contact_id, PDO::PARAM_INT);
						break;
					case '`STATUS_ID`':						
						$stmt->bindValue($identifier, $this->status_id, PDO::PARAM_INT);
						break;
					case '`CREATED_BY`':						
						$stmt->bindValue($identifier, $this->created_by, PDO::PARAM_INT);
						break;
					case '`DESCRIPTION`':						
						$stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
						break;
					case '`DUE_AT`':						
						$stmt->bindValue($identifier, $this->due_at, PDO::PARAM_STR);
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

			if ($this->aafCrmContact !== null) {
				if (!$this->aafCrmContact->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aafCrmContact->getValidationFailures());
				}
			}

			if ($this->aafCrmStatus !== null) {
				if (!$this->aafCrmStatus->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aafCrmStatus->getValidationFailures());
				}
			}

			if ($this->aafGuardUser !== null) {
				if (!$this->aafGuardUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aafGuardUser->getValidationFailures());
				}
			}


			if (($retval = afCrmActivityPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = afCrmActivityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSubject();
				break;
			case 2:
				return $this->getAccountId();
				break;
			case 3:
				return $this->getContactId();
				break;
			case 4:
				return $this->getStatusId();
				break;
			case 5:
				return $this->getCreatedBy();
				break;
			case 6:
				return $this->getDescription();
				break;
			case 7:
				return $this->getDueAt();
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
		if (isset($alreadyDumpedObjects['afCrmActivity'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['afCrmActivity'][$this->getPrimaryKey()] = true;
		$keys = afCrmActivityPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSubject(),
			$keys[2] => $this->getAccountId(),
			$keys[3] => $this->getContactId(),
			$keys[4] => $this->getStatusId(),
			$keys[5] => $this->getCreatedBy(),
			$keys[6] => $this->getDescription(),
			$keys[7] => $this->getDueAt(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aafCrmAccount) {
				$result['afCrmAccount'] = $this->aafCrmAccount->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aafCrmContact) {
				$result['afCrmContact'] = $this->aafCrmContact->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aafCrmStatus) {
				$result['afCrmStatus'] = $this->aafCrmStatus->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aafGuardUser) {
				$result['afGuardUser'] = $this->aafGuardUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = afCrmActivityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSubject($value);
				break;
			case 2:
				$this->setAccountId($value);
				break;
			case 3:
				$this->setContactId($value);
				break;
			case 4:
				$this->setStatusId($value);
				break;
			case 5:
				$this->setCreatedBy($value);
				break;
			case 6:
				$this->setDescription($value);
				break;
			case 7:
				$this->setDueAt($value);
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
		$keys = afCrmActivityPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSubject($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAccountId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setContactId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStatusId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedBy($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDescription($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDueAt($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(afCrmActivityPeer::DATABASE_NAME);

		if ($this->isColumnModified(afCrmActivityPeer::ID)) $criteria->add(afCrmActivityPeer::ID, $this->id);
		if ($this->isColumnModified(afCrmActivityPeer::SUBJECT)) $criteria->add(afCrmActivityPeer::SUBJECT, $this->subject);
		if ($this->isColumnModified(afCrmActivityPeer::ACCOUNT_ID)) $criteria->add(afCrmActivityPeer::ACCOUNT_ID, $this->account_id);
		if ($this->isColumnModified(afCrmActivityPeer::CONTACT_ID)) $criteria->add(afCrmActivityPeer::CONTACT_ID, $this->contact_id);
		if ($this->isColumnModified(afCrmActivityPeer::STATUS_ID)) $criteria->add(afCrmActivityPeer::STATUS_ID, $this->status_id);
		if ($this->isColumnModified(afCrmActivityPeer::CREATED_BY)) $criteria->add(afCrmActivityPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(afCrmActivityPeer::DESCRIPTION)) $criteria->add(afCrmActivityPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(afCrmActivityPeer::DUE_AT)) $criteria->add(afCrmActivityPeer::DUE_AT, $this->due_at);

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
		$criteria = new Criteria(afCrmActivityPeer::DATABASE_NAME);
		$criteria->add(afCrmActivityPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of afCrmActivity (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setSubject($this->getSubject());
		$copyObj->setAccountId($this->getAccountId());
		$copyObj->setContactId($this->getContactId());
		$copyObj->setStatusId($this->getStatusId());
		$copyObj->setCreatedBy($this->getCreatedBy());
		$copyObj->setDescription($this->getDescription());
		$copyObj->setDueAt($this->getDueAt());
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
	 * @return     afCrmActivity Clone of current object.
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
	 * @return     afCrmActivityPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new afCrmActivityPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a afCrmAccount object.
	 *
	 * @param      afCrmAccount $v
	 * @return     afCrmActivity The current object (for fluent API support)
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
			$v->addafCrmActivity($this);
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
				$this->aafCrmAccount->addafCrmActivitys($this);
			 */
		}
		return $this->aafCrmAccount;
	}

	/**
	 * Declares an association between this object and a afCrmContact object.
	 *
	 * @param      afCrmContact $v
	 * @return     afCrmActivity The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setafCrmContact(afCrmContact $v = null)
	{
		if ($v === null) {
			$this->setContactId(NULL);
		} else {
			$this->setContactId($v->getId());
		}

		$this->aafCrmContact = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the afCrmContact object, it will not be re-added.
		if ($v !== null) {
			$v->addafCrmActivity($this);
		}

		return $this;
	}


	/**
	 * Get the associated afCrmContact object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     afCrmContact The associated afCrmContact object.
	 * @throws     PropelException
	 */
	public function getafCrmContact(PropelPDO $con = null)
	{
		if ($this->aafCrmContact === null && ($this->contact_id !== null)) {
			$this->aafCrmContact = afCrmContactQuery::create()->findPk($this->contact_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aafCrmContact->addafCrmActivitys($this);
			 */
		}
		return $this->aafCrmContact;
	}

	/**
	 * Declares an association between this object and a afCrmStatus object.
	 *
	 * @param      afCrmStatus $v
	 * @return     afCrmActivity The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setafCrmStatus(afCrmStatus $v = null)
	{
		if ($v === null) {
			$this->setStatusId(NULL);
		} else {
			$this->setStatusId($v->getId());
		}

		$this->aafCrmStatus = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the afCrmStatus object, it will not be re-added.
		if ($v !== null) {
			$v->addafCrmActivity($this);
		}

		return $this;
	}


	/**
	 * Get the associated afCrmStatus object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     afCrmStatus The associated afCrmStatus object.
	 * @throws     PropelException
	 */
	public function getafCrmStatus(PropelPDO $con = null)
	{
		if ($this->aafCrmStatus === null && ($this->status_id !== null)) {
			$this->aafCrmStatus = afCrmStatusQuery::create()->findPk($this->status_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aafCrmStatus->addafCrmActivitys($this);
			 */
		}
		return $this->aafCrmStatus;
	}

	/**
	 * Declares an association between this object and a afGuardUser object.
	 *
	 * @param      afGuardUser $v
	 * @return     afCrmActivity The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setafGuardUser(afGuardUser $v = null)
	{
		if ($v === null) {
			$this->setCreatedBy(NULL);
		} else {
			$this->setCreatedBy($v->getId());
		}

		$this->aafGuardUser = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the afGuardUser object, it will not be re-added.
		if ($v !== null) {
			$v->addafCrmActivity($this);
		}

		return $this;
	}


	/**
	 * Get the associated afGuardUser object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     afGuardUser The associated afGuardUser object.
	 * @throws     PropelException
	 */
	public function getafGuardUser(PropelPDO $con = null)
	{
		if ($this->aafGuardUser === null && ($this->created_by !== null)) {
			$this->aafGuardUser = afGuardUserQuery::create()->findPk($this->created_by, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aafGuardUser->addafCrmActivitys($this);
			 */
		}
		return $this->aafGuardUser;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->subject = null;
		$this->account_id = null;
		$this->contact_id = null;
		$this->status_id = null;
		$this->created_by = null;
		$this->description = null;
		$this->due_at = null;
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
		} // if ($deep)

		$this->aafCrmAccount = null;
		$this->aafCrmContact = null;
		$this->aafCrmStatus = null;
		$this->aafGuardUser = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string The value of the 'subject' column
	 */
	public function __toString()
	{
		return (string) $this->getSubject();
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseafCrmActivity:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseafCrmActivity
