<?php


/**
 * Base class that represents a query for the 'dummy' table.
 *
 * 
 *
 * @method     DummyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DummyQuery orderByCombo($order = Criteria::ASC) Order by the combo column
 * @method     DummyQuery orderByFoo($order = Criteria::ASC) Order by the foo column
 * @method     DummyQuery orderByBar($order = Criteria::ASC) Order by the bar column
 *
 * @method     DummyQuery groupById() Group by the id column
 * @method     DummyQuery groupByCombo() Group by the combo column
 * @method     DummyQuery groupByFoo() Group by the foo column
 * @method     DummyQuery groupByBar() Group by the bar column
 *
 * @method     DummyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DummyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DummyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Dummy findOne(PropelPDO $con = null) Return the first Dummy matching the query
 * @method     Dummy findOneOrCreate(PropelPDO $con = null) Return the first Dummy matching the query, or a new Dummy object populated from the query conditions when no match is found
 *
 * @method     Dummy findOneById(int $id) Return the first Dummy filtered by the id column
 * @method     Dummy findOneByCombo(string $combo) Return the first Dummy filtered by the combo column
 * @method     Dummy findOneByFoo(string $foo) Return the first Dummy filtered by the foo column
 * @method     Dummy findOneByBar(string $bar) Return the first Dummy filtered by the bar column
 *
 * @method     array findById(int $id) Return Dummy objects filtered by the id column
 * @method     array findByCombo(string $combo) Return Dummy objects filtered by the combo column
 * @method     array findByFoo(string $foo) Return Dummy objects filtered by the foo column
 * @method     array findByBar(string $bar) Return Dummy objects filtered by the bar column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseDummyQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseDummyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Dummy', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DummyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DummyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DummyQuery) {
			return $criteria;
		}
		$query = new DummyQuery();
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
	 * @return    Dummy|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = DummyPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(DummyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Dummy A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `COMBO`, `FOO`, `BAR` FROM `dummy` WHERE `ID` = :p0';
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
			$obj = new Dummy();
			$obj->hydrate($row);
			DummyPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Dummy|array|mixed the result, formatted by the current formatter
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
	 * @return    DummyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DummyPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DummyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DummyPeer::ID, $keys, Criteria::IN);
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
	 * @return    DummyQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DummyPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the combo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCombo('fooValue');   // WHERE combo = 'fooValue'
	 * $query->filterByCombo('%fooValue%'); // WHERE combo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $combo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DummyQuery The current query, for fluid interface
	 */
	public function filterByCombo($combo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($combo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $combo)) {
				$combo = str_replace('*', '%', $combo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DummyPeer::COMBO, $combo, $comparison);
	}

	/**
	 * Filter the query on the foo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFoo('fooValue');   // WHERE foo = 'fooValue'
	 * $query->filterByFoo('%fooValue%'); // WHERE foo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $foo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DummyQuery The current query, for fluid interface
	 */
	public function filterByFoo($foo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($foo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $foo)) {
				$foo = str_replace('*', '%', $foo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DummyPeer::FOO, $foo, $comparison);
	}

	/**
	 * Filter the query on the bar column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByBar('fooValue');   // WHERE bar = 'fooValue'
	 * $query->filterByBar('%fooValue%'); // WHERE bar LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $bar The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DummyQuery The current query, for fluid interface
	 */
	public function filterByBar($bar = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($bar)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $bar)) {
				$bar = str_replace('*', '%', $bar);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DummyPeer::BAR, $bar, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Dummy $dummy Object to remove from the list of results
	 *
	 * @return    DummyQuery The current query, for fluid interface
	 */
	public function prune($dummy = null)
	{
		if ($dummy) {
			$this->addUsingAlias(DummyPeer::ID, $dummy->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseDummyQuery