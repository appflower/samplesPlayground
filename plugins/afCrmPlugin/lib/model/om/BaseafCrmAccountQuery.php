<?php


/**
 * Base class that represents a query for the 'afcrm_account' table.
 *
 * 
 *
 * @method     afCrmAccountQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     afCrmAccountQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     afCrmAccountQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     afCrmAccountQuery orderByZipcode($order = Criteria::ASC) Order by the zipcode column
 * @method     afCrmAccountQuery orderByAddressLine1($order = Criteria::ASC) Order by the address_line1 column
 * @method     afCrmAccountQuery orderByAddressLine2($order = Criteria::ASC) Order by the address_line2 column
 * @method     afCrmAccountQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     afCrmAccountQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     afCrmAccountQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     afCrmAccountQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     afCrmAccountQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     afCrmAccountQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 * @method     afCrmAccountQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     afCrmAccountQuery groupById() Group by the id column
 * @method     afCrmAccountQuery groupByName() Group by the name column
 * @method     afCrmAccountQuery groupByCity() Group by the city column
 * @method     afCrmAccountQuery groupByZipcode() Group by the zipcode column
 * @method     afCrmAccountQuery groupByAddressLine1() Group by the address_line1 column
 * @method     afCrmAccountQuery groupByAddressLine2() Group by the address_line2 column
 * @method     afCrmAccountQuery groupByState() Group by the state column
 * @method     afCrmAccountQuery groupByCountry() Group by the country column
 * @method     afCrmAccountQuery groupByPhone() Group by the phone column
 * @method     afCrmAccountQuery groupByFax() Group by the fax column
 * @method     afCrmAccountQuery groupByEmail() Group by the email column
 * @method     afCrmAccountQuery groupByWebsite() Group by the website column
 * @method     afCrmAccountQuery groupByDescription() Group by the description column
 *
 * @method     afCrmAccountQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     afCrmAccountQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     afCrmAccountQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     afCrmAccountQuery leftJoinafCrmContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmContact relation
 * @method     afCrmAccountQuery rightJoinafCrmContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmContact relation
 * @method     afCrmAccountQuery innerJoinafCrmContact($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmContact relation
 *
 * @method     afCrmAccountQuery leftJoinafCrmOpportunity($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmOpportunity relation
 * @method     afCrmAccountQuery rightJoinafCrmOpportunity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmOpportunity relation
 * @method     afCrmAccountQuery innerJoinafCrmOpportunity($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmOpportunity relation
 *
 * @method     afCrmAccountQuery leftJoinafCrmActivity($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmActivity relation
 * @method     afCrmAccountQuery rightJoinafCrmActivity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmActivity relation
 * @method     afCrmAccountQuery innerJoinafCrmActivity($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmActivity relation
 *
 * @method     afCrmAccount findOne(PropelPDO $con = null) Return the first afCrmAccount matching the query
 * @method     afCrmAccount findOneOrCreate(PropelPDO $con = null) Return the first afCrmAccount matching the query, or a new afCrmAccount object populated from the query conditions when no match is found
 *
 * @method     afCrmAccount findOneById(int $id) Return the first afCrmAccount filtered by the id column
 * @method     afCrmAccount findOneByName(string $name) Return the first afCrmAccount filtered by the name column
 * @method     afCrmAccount findOneByCity(string $city) Return the first afCrmAccount filtered by the city column
 * @method     afCrmAccount findOneByZipcode(string $zipcode) Return the first afCrmAccount filtered by the zipcode column
 * @method     afCrmAccount findOneByAddressLine1(string $address_line1) Return the first afCrmAccount filtered by the address_line1 column
 * @method     afCrmAccount findOneByAddressLine2(string $address_line2) Return the first afCrmAccount filtered by the address_line2 column
 * @method     afCrmAccount findOneByState(string $state) Return the first afCrmAccount filtered by the state column
 * @method     afCrmAccount findOneByCountry(string $country) Return the first afCrmAccount filtered by the country column
 * @method     afCrmAccount findOneByPhone(string $phone) Return the first afCrmAccount filtered by the phone column
 * @method     afCrmAccount findOneByFax(string $fax) Return the first afCrmAccount filtered by the fax column
 * @method     afCrmAccount findOneByEmail(string $email) Return the first afCrmAccount filtered by the email column
 * @method     afCrmAccount findOneByWebsite(string $website) Return the first afCrmAccount filtered by the website column
 * @method     afCrmAccount findOneByDescription(string $description) Return the first afCrmAccount filtered by the description column
 *
 * @method     array findById(int $id) Return afCrmAccount objects filtered by the id column
 * @method     array findByName(string $name) Return afCrmAccount objects filtered by the name column
 * @method     array findByCity(string $city) Return afCrmAccount objects filtered by the city column
 * @method     array findByZipcode(string $zipcode) Return afCrmAccount objects filtered by the zipcode column
 * @method     array findByAddressLine1(string $address_line1) Return afCrmAccount objects filtered by the address_line1 column
 * @method     array findByAddressLine2(string $address_line2) Return afCrmAccount objects filtered by the address_line2 column
 * @method     array findByState(string $state) Return afCrmAccount objects filtered by the state column
 * @method     array findByCountry(string $country) Return afCrmAccount objects filtered by the country column
 * @method     array findByPhone(string $phone) Return afCrmAccount objects filtered by the phone column
 * @method     array findByFax(string $fax) Return afCrmAccount objects filtered by the fax column
 * @method     array findByEmail(string $email) Return afCrmAccount objects filtered by the email column
 * @method     array findByWebsite(string $website) Return afCrmAccount objects filtered by the website column
 * @method     array findByDescription(string $description) Return afCrmAccount objects filtered by the description column
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmAccountQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseafCrmAccountQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'afCrmAccount', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new afCrmAccountQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    afCrmAccountQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof afCrmAccountQuery) {
			return $criteria;
		}
		$query = new afCrmAccountQuery();
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
	 * @return    afCrmAccount|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = afCrmAccountPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(afCrmAccountPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    afCrmAccount A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `NAME`, `CITY`, `ZIPCODE`, `ADDRESS_LINE1`, `ADDRESS_LINE2`, `STATE`, `COUNTRY`, `PHONE`, `FAX`, `EMAIL`, `WEBSITE`, `DESCRIPTION` FROM `afcrm_account` WHERE `ID` = :p0';
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
			$obj = new afCrmAccount();
			$obj->hydrate($row);
			afCrmAccountPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    afCrmAccount|array|mixed the result, formatted by the current formatter
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
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(afCrmAccountPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(afCrmAccountPeer::ID, $keys, Criteria::IN);
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
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(afCrmAccountPeer::ID, $id, $comparison);
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
	 * @return    afCrmAccountQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmAccountPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the city column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
	 * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $city The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the zipcode column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByZipcode('fooValue');   // WHERE zipcode = 'fooValue'
	 * $query->filterByZipcode('%fooValue%'); // WHERE zipcode LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $zipcode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByZipcode($zipcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zipcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zipcode)) {
				$zipcode = str_replace('*', '%', $zipcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::ZIPCODE, $zipcode, $comparison);
	}

	/**
	 * Filter the query on the address_line1 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAddressLine1('fooValue');   // WHERE address_line1 = 'fooValue'
	 * $query->filterByAddressLine1('%fooValue%'); // WHERE address_line1 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $addressLine1 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByAddressLine1($addressLine1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($addressLine1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $addressLine1)) {
				$addressLine1 = str_replace('*', '%', $addressLine1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::ADDRESS_LINE1, $addressLine1, $comparison);
	}

	/**
	 * Filter the query on the address_line2 column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAddressLine2('fooValue');   // WHERE address_line2 = 'fooValue'
	 * $query->filterByAddressLine2('%fooValue%'); // WHERE address_line2 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $addressLine2 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByAddressLine2($addressLine2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($addressLine2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $addressLine2)) {
				$addressLine2 = str_replace('*', '%', $addressLine2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::ADDRESS_LINE2, $addressLine2, $comparison);
	}

	/**
	 * Filter the query on the state column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByState('fooValue');   // WHERE state = 'fooValue'
	 * $query->filterByState('%fooValue%'); // WHERE state LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $state The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByState($state = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($state)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $state)) {
				$state = str_replace('*', '%', $state);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the country column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
	 * $query->filterByCountry('%fooValue%'); // WHERE country LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $country The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByCountry($country = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($country)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $country)) {
				$country = str_replace('*', '%', $country);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the phone column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
	 * $query->filterByPhone('%fooValue%'); // WHERE phone LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $phone The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByPhone($phone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phone)) {
				$phone = str_replace('*', '%', $phone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::PHONE, $phone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
	 * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $fax The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByFax($fax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fax)) {
				$fax = str_replace('*', '%', $fax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the email column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the website column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByWebsite('fooValue');   // WHERE website = 'fooValue'
	 * $query->filterByWebsite('%fooValue%'); // WHERE website LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $website The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByWebsite($website = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($website)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $website)) {
				$website = str_replace('*', '%', $website);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmAccountPeer::WEBSITE, $website, $comparison);
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
	 * @return    afCrmAccountQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmAccountPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query by a related afCrmContact object
	 *
	 * @param     afCrmContact $afCrmContact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByafCrmContact($afCrmContact, $comparison = null)
	{
		if ($afCrmContact instanceof afCrmContact) {
			return $this
				->addUsingAlias(afCrmAccountPeer::ID, $afCrmContact->getAccountId(), $comparison);
		} elseif ($afCrmContact instanceof PropelCollection) {
			return $this
				->useafCrmContactQuery()
				->filterByPrimaryKeys($afCrmContact->getPrimaryKeys())
				->endUse();
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
	 * @return    afCrmAccountQuery The current query, for fluid interface
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
	 * Filter the query by a related afCrmOpportunity object
	 *
	 * @param     afCrmOpportunity $afCrmOpportunity  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByafCrmOpportunity($afCrmOpportunity, $comparison = null)
	{
		if ($afCrmOpportunity instanceof afCrmOpportunity) {
			return $this
				->addUsingAlias(afCrmAccountPeer::ID, $afCrmOpportunity->getAccountId(), $comparison);
		} elseif ($afCrmOpportunity instanceof PropelCollection) {
			return $this
				->useafCrmOpportunityQuery()
				->filterByPrimaryKeys($afCrmOpportunity->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByafCrmOpportunity() only accepts arguments of type afCrmOpportunity or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the afCrmOpportunity relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function joinafCrmOpportunity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afCrmOpportunity');

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
			$this->addJoinObject($join, 'afCrmOpportunity');
		}

		return $this;
	}

	/**
	 * Use the afCrmOpportunity relation afCrmOpportunity object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmOpportunityQuery A secondary query class using the current class as primary query
	 */
	public function useafCrmOpportunityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafCrmOpportunity($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afCrmOpportunity', 'afCrmOpportunityQuery');
	}

	/**
	 * Filter the query by a related afCrmActivity object
	 *
	 * @param     afCrmActivity $afCrmActivity  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function filterByafCrmActivity($afCrmActivity, $comparison = null)
	{
		if ($afCrmActivity instanceof afCrmActivity) {
			return $this
				->addUsingAlias(afCrmAccountPeer::ID, $afCrmActivity->getAccountId(), $comparison);
		} elseif ($afCrmActivity instanceof PropelCollection) {
			return $this
				->useafCrmActivityQuery()
				->filterByPrimaryKeys($afCrmActivity->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByafCrmActivity() only accepts arguments of type afCrmActivity or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the afCrmActivity relation
	 *
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function joinafCrmActivity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('afCrmActivity');

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
			$this->addJoinObject($join, 'afCrmActivity');
		}

		return $this;
	}

	/**
	 * Use the afCrmActivity relation afCrmActivity object
	 *
	 * @see       useQuery()
	 *
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    afCrmActivityQuery A secondary query class using the current class as primary query
	 */
	public function useafCrmActivityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinafCrmActivity($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'afCrmActivity', 'afCrmActivityQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     afCrmAccount $afCrmAccount Object to remove from the list of results
	 *
	 * @return    afCrmAccountQuery The current query, for fluid interface
	 */
	public function prune($afCrmAccount = null)
	{
		if ($afCrmAccount) {
			$this->addUsingAlias(afCrmAccountPeer::ID, $afCrmAccount->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseafCrmAccountQuery