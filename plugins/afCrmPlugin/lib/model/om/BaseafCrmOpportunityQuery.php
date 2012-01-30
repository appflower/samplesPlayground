<?php


/**
 * Base class that represents a query for the 'afcrm_opportunity' table.
 *
 * 
 *
 * @method     afCrmOpportunityQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     afCrmOpportunityQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     afCrmOpportunityQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     afCrmOpportunityQuery orderByAccountId($order = Criteria::ASC) Order by the account_id column
 * @method     afCrmOpportunityQuery orderByAssignedTo($order = Criteria::ASC) Order by the assigned_to column
 * @method     afCrmOpportunityQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     afCrmOpportunityQuery orderByExpectedClosedate($order = Criteria::ASC) Order by the expected_closedate column
 * @method     afCrmOpportunityQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method     afCrmOpportunityQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     afCrmOpportunityQuery groupById() Group by the id column
 * @method     afCrmOpportunityQuery groupByName() Group by the name column
 * @method     afCrmOpportunityQuery groupByAmount() Group by the amount column
 * @method     afCrmOpportunityQuery groupByAccountId() Group by the account_id column
 * @method     afCrmOpportunityQuery groupByAssignedTo() Group by the assigned_to column
 * @method     afCrmOpportunityQuery groupByDescription() Group by the description column
 * @method     afCrmOpportunityQuery groupByExpectedClosedate() Group by the expected_closedate column
 * @method     afCrmOpportunityQuery groupByCreatedBy() Group by the created_by column
 * @method     afCrmOpportunityQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     afCrmOpportunityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     afCrmOpportunityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     afCrmOpportunityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     afCrmOpportunityQuery leftJoinafCrmAccount($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmAccount relation
 * @method     afCrmOpportunityQuery rightJoinafCrmAccount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmAccount relation
 * @method     afCrmOpportunityQuery innerJoinafCrmAccount($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmAccount relation
 *
 * @method     afCrmOpportunityQuery leftJoinafCrmContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmContact relation
 * @method     afCrmOpportunityQuery rightJoinafCrmContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmContact relation
 * @method     afCrmOpportunityQuery innerJoinafCrmContact($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmContact relation
 *
 * @method     afCrmOpportunityQuery leftJoinafGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the afGuardUser relation
 * @method     afCrmOpportunityQuery rightJoinafGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afGuardUser relation
 * @method     afCrmOpportunityQuery innerJoinafGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the afGuardUser relation
 *
 * @method     afCrmOpportunity findOne(PropelPDO $con = null) Return the first afCrmOpportunity matching the query
 * @method     afCrmOpportunity findOneOrCreate(PropelPDO $con = null) Return the first afCrmOpportunity matching the query, or a new afCrmOpportunity object populated from the query conditions when no match is found
 *
 * @method     afCrmOpportunity findOneById(int $id) Return the first afCrmOpportunity filtered by the id column
 * @method     afCrmOpportunity findOneByName(string $name) Return the first afCrmOpportunity filtered by the name column
 * @method     afCrmOpportunity findOneByAmount(string $amount) Return the first afCrmOpportunity filtered by the amount column
 * @method     afCrmOpportunity findOneByAccountId(int $account_id) Return the first afCrmOpportunity filtered by the account_id column
 * @method     afCrmOpportunity findOneByAssignedTo(int $assigned_to) Return the first afCrmOpportunity filtered by the assigned_to column
 * @method     afCrmOpportunity findOneByDescription(string $description) Return the first afCrmOpportunity filtered by the description column
 * @method     afCrmOpportunity findOneByExpectedClosedate(string $expected_closedate) Return the first afCrmOpportunity filtered by the expected_closedate column
 * @method     afCrmOpportunity findOneByCreatedBy(int $created_by) Return the first afCrmOpportunity filtered by the created_by column
 * @method     afCrmOpportunity findOneByCreatedAt(string $created_at) Return the first afCrmOpportunity filtered by the created_at column
 *
 * @method     array findById(int $id) Return afCrmOpportunity objects filtered by the id column
 * @method     array findByName(string $name) Return afCrmOpportunity objects filtered by the name column
 * @method     array findByAmount(string $amount) Return afCrmOpportunity objects filtered by the amount column
 * @method     array findByAccountId(int $account_id) Return afCrmOpportunity objects filtered by the account_id column
 * @method     array findByAssignedTo(int $assigned_to) Return afCrmOpportunity objects filtered by the assigned_to column
 * @method     array findByDescription(string $description) Return afCrmOpportunity objects filtered by the description column
 * @method     array findByExpectedClosedate(string $expected_closedate) Return afCrmOpportunity objects filtered by the expected_closedate column
 * @method     array findByCreatedBy(int $created_by) Return afCrmOpportunity objects filtered by the created_by column
 * @method     array findByCreatedAt(string $created_at) Return afCrmOpportunity objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmOpportunityQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseafCrmOpportunityQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'afCrmOpportunity', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new afCrmOpportunityQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    afCrmOpportunityQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof afCrmOpportunityQuery) {
			return $criteria;
		}
		$query = new afCrmOpportunityQuery();
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
	 * @return    afCrmOpportunity|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = afCrmOpportunityPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(afCrmOpportunityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    afCrmOpportunity A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `NAME`, `AMOUNT`, `ACCOUNT_ID`, `ASSIGNED_TO`, `DESCRIPTION`, `EXPECTED_CLOSEDATE`, `CREATED_BY`, `CREATED_AT` FROM `afcrm_opportunity` WHERE `ID` = :p0';
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
			$obj = new afCrmOpportunity();
			$obj->hydrate($row);
			afCrmOpportunityPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    afCrmOpportunity|array|mixed the result, formatted by the current formatter
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(afCrmOpportunityPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(afCrmOpportunityPeer::ID, $keys, Criteria::IN);
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the amount column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAmount('fooValue');   // WHERE amount = 'fooValue'
	 * $query->filterByAmount('%fooValue%'); // WHERE amount LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $amount The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByAmount($amount = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($amount)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $amount)) {
				$amount = str_replace('*', '%', $amount);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::AMOUNT, $amount, $comparison);
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByAccountId($accountId = null, $comparison = null)
	{
		if (is_array($accountId)) {
			$useMinMax = false;
			if (isset($accountId['min'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::ACCOUNT_ID, $accountId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($accountId['max'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::ACCOUNT_ID, $accountId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::ACCOUNT_ID, $accountId, $comparison);
	}

	/**
	 * Filter the query on the assigned_to column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAssignedTo(1234); // WHERE assigned_to = 1234
	 * $query->filterByAssignedTo(array(12, 34)); // WHERE assigned_to IN (12, 34)
	 * $query->filterByAssignedTo(array('min' => 12)); // WHERE assigned_to > 12
	 * </code>
	 *
	 * @see       filterByafCrmContact()
	 *
	 * @param     mixed $assignedTo The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByAssignedTo($assignedTo = null, $comparison = null)
	{
		if (is_array($assignedTo)) {
			$useMinMax = false;
			if (isset($assignedTo['min'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::ASSIGNED_TO, $assignedTo['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($assignedTo['max'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::ASSIGNED_TO, $assignedTo['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::ASSIGNED_TO, $assignedTo, $comparison);
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmOpportunityPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the expected_closedate column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByExpectedClosedate('2011-03-14'); // WHERE expected_closedate = '2011-03-14'
	 * $query->filterByExpectedClosedate('now'); // WHERE expected_closedate = '2011-03-14'
	 * $query->filterByExpectedClosedate(array('max' => 'yesterday')); // WHERE expected_closedate > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $expectedClosedate The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByExpectedClosedate($expectedClosedate = null, $comparison = null)
	{
		if (is_array($expectedClosedate)) {
			$useMinMax = false;
			if (isset($expectedClosedate['min'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::EXPECTED_CLOSEDATE, $expectedClosedate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expectedClosedate['max'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::EXPECTED_CLOSEDATE, $expectedClosedate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::EXPECTED_CLOSEDATE, $expectedClosedate, $comparison);
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByCreatedBy($createdBy = null, $comparison = null)
	{
		if (is_array($createdBy)) {
			$useMinMax = false;
			if (isset($createdBy['min'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::CREATED_BY, $createdBy['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdBy['max'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::CREATED_BY, $createdBy['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::CREATED_BY, $createdBy, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
	 * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $createdAt The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(afCrmOpportunityPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmOpportunityPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query by a related afCrmAccount object
	 *
	 * @param     afCrmAccount|PropelCollection $afCrmAccount The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByafCrmAccount($afCrmAccount, $comparison = null)
	{
		if ($afCrmAccount instanceof afCrmAccount) {
			return $this
				->addUsingAlias(afCrmOpportunityPeer::ACCOUNT_ID, $afCrmAccount->getId(), $comparison);
		} elseif ($afCrmAccount instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmOpportunityPeer::ACCOUNT_ID, $afCrmAccount->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByafCrmContact($afCrmContact, $comparison = null)
	{
		if ($afCrmContact instanceof afCrmContact) {
			return $this
				->addUsingAlias(afCrmOpportunityPeer::ASSIGNED_TO, $afCrmContact->getId(), $comparison);
		} elseif ($afCrmContact instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmOpportunityPeer::ASSIGNED_TO, $afCrmContact->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
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
	 * Filter the query by a related afGuardUser object
	 *
	 * @param     afGuardUser|PropelCollection $afGuardUser The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function filterByafGuardUser($afGuardUser, $comparison = null)
	{
		if ($afGuardUser instanceof afGuardUser) {
			return $this
				->addUsingAlias(afCrmOpportunityPeer::CREATED_BY, $afGuardUser->getId(), $comparison);
		} elseif ($afGuardUser instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmOpportunityPeer::CREATED_BY, $afGuardUser->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
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
	 * @param     afCrmOpportunity $afCrmOpportunity Object to remove from the list of results
	 *
	 * @return    afCrmOpportunityQuery The current query, for fluid interface
	 */
	public function prune($afCrmOpportunity = null)
	{
		if ($afCrmOpportunity) {
			$this->addUsingAlias(afCrmOpportunityPeer::ID, $afCrmOpportunity->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseafCrmOpportunityQuery