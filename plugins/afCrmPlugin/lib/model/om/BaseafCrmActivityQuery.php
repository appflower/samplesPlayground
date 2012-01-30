<?php


/**
 * Base class that represents a query for the 'afcrm_activity' table.
 *
 * 
 *
 * @method     afCrmActivityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     afCrmActivityQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     afCrmActivityQuery orderByAccountId($order = Criteria::ASC) Order by the account_id column
 * @method     afCrmActivityQuery orderByContactId($order = Criteria::ASC) Order by the contact_id column
 * @method     afCrmActivityQuery orderByStatusId($order = Criteria::ASC) Order by the status_id column
 * @method     afCrmActivityQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method     afCrmActivityQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     afCrmActivityQuery orderByDueAt($order = Criteria::ASC) Order by the due_at column
 *
 * @method     afCrmActivityQuery groupById() Group by the id column
 * @method     afCrmActivityQuery groupBySubject() Group by the subject column
 * @method     afCrmActivityQuery groupByAccountId() Group by the account_id column
 * @method     afCrmActivityQuery groupByContactId() Group by the contact_id column
 * @method     afCrmActivityQuery groupByStatusId() Group by the status_id column
 * @method     afCrmActivityQuery groupByCreatedBy() Group by the created_by column
 * @method     afCrmActivityQuery groupByDescription() Group by the description column
 * @method     afCrmActivityQuery groupByDueAt() Group by the due_at column
 *
 * @method     afCrmActivityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     afCrmActivityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     afCrmActivityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     afCrmActivityQuery leftJoinafCrmAccount($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmAccount relation
 * @method     afCrmActivityQuery rightJoinafCrmAccount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmAccount relation
 * @method     afCrmActivityQuery innerJoinafCrmAccount($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmAccount relation
 *
 * @method     afCrmActivityQuery leftJoinafCrmContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmContact relation
 * @method     afCrmActivityQuery rightJoinafCrmContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmContact relation
 * @method     afCrmActivityQuery innerJoinafCrmContact($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmContact relation
 *
 * @method     afCrmActivityQuery leftJoinafCrmStatus($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmStatus relation
 * @method     afCrmActivityQuery rightJoinafCrmStatus($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmStatus relation
 * @method     afCrmActivityQuery innerJoinafCrmStatus($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmStatus relation
 *
 * @method     afCrmActivityQuery leftJoinafGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the afGuardUser relation
 * @method     afCrmActivityQuery rightJoinafGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afGuardUser relation
 * @method     afCrmActivityQuery innerJoinafGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the afGuardUser relation
 *
 * @method     afCrmActivity findOne(PropelPDO $con = null) Return the first afCrmActivity matching the query
 * @method     afCrmActivity findOneOrCreate(PropelPDO $con = null) Return the first afCrmActivity matching the query, or a new afCrmActivity object populated from the query conditions when no match is found
 *
 * @method     afCrmActivity findOneById(int $id) Return the first afCrmActivity filtered by the id column
 * @method     afCrmActivity findOneBySubject(string $subject) Return the first afCrmActivity filtered by the subject column
 * @method     afCrmActivity findOneByAccountId(int $account_id) Return the first afCrmActivity filtered by the account_id column
 * @method     afCrmActivity findOneByContactId(int $contact_id) Return the first afCrmActivity filtered by the contact_id column
 * @method     afCrmActivity findOneByStatusId(int $status_id) Return the first afCrmActivity filtered by the status_id column
 * @method     afCrmActivity findOneByCreatedBy(int $created_by) Return the first afCrmActivity filtered by the created_by column
 * @method     afCrmActivity findOneByDescription(string $description) Return the first afCrmActivity filtered by the description column
 * @method     afCrmActivity findOneByDueAt(string $due_at) Return the first afCrmActivity filtered by the due_at column
 *
 * @method     array findById(int $id) Return afCrmActivity objects filtered by the id column
 * @method     array findBySubject(string $subject) Return afCrmActivity objects filtered by the subject column
 * @method     array findByAccountId(int $account_id) Return afCrmActivity objects filtered by the account_id column
 * @method     array findByContactId(int $contact_id) Return afCrmActivity objects filtered by the contact_id column
 * @method     array findByStatusId(int $status_id) Return afCrmActivity objects filtered by the status_id column
 * @method     array findByCreatedBy(int $created_by) Return afCrmActivity objects filtered by the created_by column
 * @method     array findByDescription(string $description) Return afCrmActivity objects filtered by the description column
 * @method     array findByDueAt(string $due_at) Return afCrmActivity objects filtered by the due_at column
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmActivityQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseafCrmActivityQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'afCrmActivity', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new afCrmActivityQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    afCrmActivityQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof afCrmActivityQuery) {
			return $criteria;
		}
		$query = new afCrmActivityQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    afCrmActivity|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = afCrmActivityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(afCrmActivityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    afCrmActivity A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `SUBJECT`, `ACCOUNT_ID`, `CONTACT_ID`, `STATUS_ID`, `CREATED_BY`, `DESCRIPTION`, `DUE_AT` FROM `afcrm_activity` WHERE `ID` = :p0';
		try {
			$stmt = $con->prepare($sql);			
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new afCrmActivity();
			$obj->hydrate($row);
			afCrmActivityPeer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    afCrmActivity|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(afCrmActivityPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(afCrmActivityPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(afCrmActivityPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the subject column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySubject('fooValue');   // WHERE subject = 'fooValue'
	 * $query->filterBySubject('%fooValue%'); // WHERE subject LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $subject The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterBySubject($subject = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subject)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subject)) {
				$subject = str_replace('*', '%', $subject);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmActivityPeer::SUBJECT, $subject, $comparison);
	}

	/**
	 * Filter the query on the account_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAccountId(1234); // WHERE account_id = 1234
	 * $query->filterByAccountId(array(12, 34)); // WHERE account_id IN (12, 34)
	 * $query->filterByAccountId(array('min' => 12)); // WHERE account_id > 12
	 * </code>
	 *
	 * @see       filterByafCrmAccount()
	 *
	 * @param     mixed $accountId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByAccountId($accountId = null, $comparison = null)
	{
		if (is_array($accountId)) {
			$useMinMax = false;
			if (isset($accountId['min'])) {
				$this->addUsingAlias(afCrmActivityPeer::ACCOUNT_ID, $accountId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($accountId['max'])) {
				$this->addUsingAlias(afCrmActivityPeer::ACCOUNT_ID, $accountId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmActivityPeer::ACCOUNT_ID, $accountId, $comparison);
	}

	/**
	 * Filter the query on the contact_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByContactId(1234); // WHERE contact_id = 1234
	 * $query->filterByContactId(array(12, 34)); // WHERE contact_id IN (12, 34)
	 * $query->filterByContactId(array('min' => 12)); // WHERE contact_id > 12
	 * </code>
	 *
	 * @see       filterByafCrmContact()
	 *
	 * @param     mixed $contactId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByContactId($contactId = null, $comparison = null)
	{
		if (is_array($contactId)) {
			$useMinMax = false;
			if (isset($contactId['min'])) {
				$this->addUsingAlias(afCrmActivityPeer::CONTACT_ID, $contactId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contactId['max'])) {
				$this->addUsingAlias(afCrmActivityPeer::CONTACT_ID, $contactId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmActivityPeer::CONTACT_ID, $contactId, $comparison);
	}

	/**
	 * Filter the query on the status_id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStatusId(1234); // WHERE status_id = 1234
	 * $query->filterByStatusId(array(12, 34)); // WHERE status_id IN (12, 34)
	 * $query->filterByStatusId(array('min' => 12)); // WHERE status_id > 12
	 * </code>
	 *
	 * @see       filterByafCrmStatus()
	 *
	 * @param     mixed $statusId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByStatusId($statusId = null, $comparison = null)
	{
		if (is_array($statusId)) {
			$useMinMax = false;
			if (isset($statusId['min'])) {
				$this->addUsingAlias(afCrmActivityPeer::STATUS_ID, $statusId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusId['max'])) {
				$this->addUsingAlias(afCrmActivityPeer::STATUS_ID, $statusId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmActivityPeer::STATUS_ID, $statusId, $comparison);
	}

	/**
	 * Filter the query on the created_by column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCreatedBy(1234); // WHERE created_by = 1234
	 * $query->filterByCreatedBy(array(12, 34)); // WHERE created_by IN (12, 34)
	 * $query->filterByCreatedBy(array('min' => 12)); // WHERE created_by > 12
	 * </code>
	 *
	 * @see       filterByafGuardUser()
	 *
	 * @param     mixed $createdBy The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByCreatedBy($createdBy = null, $comparison = null)
	{
		if (is_array($createdBy)) {
			$useMinMax = false;
			if (isset($createdBy['min'])) {
				$this->addUsingAlias(afCrmActivityPeer::CREATED_BY, $createdBy['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdBy['max'])) {
				$this->addUsingAlias(afCrmActivityPeer::CREATED_BY, $createdBy['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmActivityPeer::CREATED_BY, $createdBy, $comparison);
	}

	/**
	 * Filter the query on the description column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
	 * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $description The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmActivityPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the due_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDueAt('2011-03-14'); // WHERE due_at = '2011-03-14'
	 * $query->filterByDueAt('now'); // WHERE due_at = '2011-03-14'
	 * $query->filterByDueAt(array('max' => 'yesterday')); // WHERE due_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $dueAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByDueAt($dueAt = null, $comparison = null)
	{
		if (is_array($dueAt)) {
			$useMinMax = false;
			if (isset($dueAt['min'])) {
				$this->addUsingAlias(afCrmActivityPeer::DUE_AT, $dueAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dueAt['max'])) {
				$this->addUsingAlias(afCrmActivityPeer::DUE_AT, $dueAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmActivityPeer::DUE_AT, $dueAt, $comparison);
	}

	/**
	 * Filter the query by a related afCrmAccount object
	 *
	 * @param     afCrmAccount|PropelCollection $afCrmAccount The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByafCrmAccount($afCrmAccount, $comparison = null)
	{
		if ($afCrmAccount instanceof afCrmAccount) {
			return $this
				->addUsingAlias(afCrmActivityPeer::ACCOUNT_ID, $afCrmAccount->getId(), $comparison);
		} elseif ($afCrmAccount instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmActivityPeer::ACCOUNT_ID, $afCrmAccount->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByafCrmAccount() only accepts arguments of type afCrmAccount or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the afCrmAccount relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function joinafCrmAccount($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afCrmAccount');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afCrmAccount');
		}

		return $this;
	}

	/**
	 * Use the afCrmAccount relation afCrmAccount object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmAccountQuery A secondary query class using the current class as primary query
	 */
	public function useafCrmAccountQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafCrmAccount($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afCrmAccount', 'afCrmAccountQuery');
	}

	/**
	 * Filter the query by a related afCrmContact object
	 *
	 * @param     afCrmContact|PropelCollection $afCrmContact The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByafCrmContact($afCrmContact, $comparison = null)
	{
		if ($afCrmContact instanceof afCrmContact) {
			return $this
				->addUsingAlias(afCrmActivityPeer::CONTACT_ID, $afCrmContact->getId(), $comparison);
		} elseif ($afCrmContact instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmActivityPeer::CONTACT_ID, $afCrmContact->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByafCrmContact() only accepts arguments of type afCrmContact or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the afCrmContact relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function joinafCrmContact($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afCrmContact');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afCrmContact');
		}

		return $this;
	}

	/**
	 * Use the afCrmContact relation afCrmContact object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmContactQuery A secondary query class using the current class as primary query
	 */
	public function useafCrmContactQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafCrmContact($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afCrmContact', 'afCrmContactQuery');
	}

	/**
	 * Filter the query by a related afCrmStatus object
	 *
	 * @param     afCrmStatus|PropelCollection $afCrmStatus The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByafCrmStatus($afCrmStatus, $comparison = null)
	{
		if ($afCrmStatus instanceof afCrmStatus) {
			return $this
				->addUsingAlias(afCrmActivityPeer::STATUS_ID, $afCrmStatus->getId(), $comparison);
		} elseif ($afCrmStatus instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmActivityPeer::STATUS_ID, $afCrmStatus->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByafCrmStatus() only accepts arguments of type afCrmStatus or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the afCrmStatus relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function joinafCrmStatus($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afCrmStatus');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afCrmStatus');
		}

		return $this;
	}

	/**
	 * Use the afCrmStatus relation afCrmStatus object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmStatusQuery A secondary query class using the current class as primary query
	 */
	public function useafCrmStatusQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafCrmStatus($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afCrmStatus', 'afCrmStatusQuery');
	}

	/**
	 * Filter the query by a related afGuardUser object
	 *
	 * @param     afGuardUser|PropelCollection $afGuardUser The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function filterByafGuardUser($afGuardUser, $comparison = null)
	{
		if ($afGuardUser instanceof afGuardUser) {
			return $this
				->addUsingAlias(afCrmActivityPeer::CREATED_BY, $afGuardUser->getId(), $comparison);
		} elseif ($afGuardUser instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmActivityPeer::CREATED_BY, $afGuardUser->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByafGuardUser() only accepts arguments of type afGuardUser or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the afGuardUser relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function joinafGuardUser($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afGuardUser');

		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}

		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'afGuardUser');
		}

		return $this;
	}

	/**
	 * Use the afGuardUser relation afGuardUser object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afGuardUserQuery A secondary query class using the current class as primary query
	 */
	public function useafGuardUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafGuardUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afGuardUser', 'afGuardUserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     afCrmActivity $afCrmActivity Object to remove from the list of results
	 *
	 * @return    afCrmActivityQuery The current query, for fluid interface
	 */
	public function prune($afCrmActivity = null)
	{
		if ($afCrmActivity) {
			$this->addUsingAlias(afCrmActivityPeer::ID, $afCrmActivity->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseafCrmActivityQuery