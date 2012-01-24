<?php


/**
 * Base class that represents a query for the 'afcrm_contact' table.
 *
 * 
 *
 * @method     afCrmContactQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     afCrmContactQuery orderByAccountId($order = Criteria::ASC) Order by the account_id column
 * @method     afCrmContactQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     afCrmContactQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     afCrmContactQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     afCrmContactQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     afCrmContactQuery orderByPhoneWork($order = Criteria::ASC) Order by the phone_work column
 * @method     afCrmContactQuery orderByPhoneMobile($order = Criteria::ASC) Order by the phone_mobile column
 * @method     afCrmContactQuery orderBySkype($order = Criteria::ASC) Order by the skype column
 * @method     afCrmContactQuery orderByMsn($order = Criteria::ASC) Order by the msn column
 * @method     afCrmContactQuery orderByAddressLine1($order = Criteria::ASC) Order by the address_line1 column
 * @method     afCrmContactQuery orderByAddressLine2($order = Criteria::ASC) Order by the address_line2 column
 * @method     afCrmContactQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     afCrmContactQuery orderByZipcode($order = Criteria::ASC) Order by the zipcode column
 * @method     afCrmContactQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     afCrmContactQuery orderByCountry($order = Criteria::ASC) Order by the country column
 *
 * @method     afCrmContactQuery groupById() Group by the id column
 * @method     afCrmContactQuery groupByAccountId() Group by the account_id column
 * @method     afCrmContactQuery groupByFirstName() Group by the first_name column
 * @method     afCrmContactQuery groupByLastName() Group by the last_name column
 * @method     afCrmContactQuery groupByTitle() Group by the title column
 * @method     afCrmContactQuery groupByEmail() Group by the email column
 * @method     afCrmContactQuery groupByPhoneWork() Group by the phone_work column
 * @method     afCrmContactQuery groupByPhoneMobile() Group by the phone_mobile column
 * @method     afCrmContactQuery groupBySkype() Group by the skype column
 * @method     afCrmContactQuery groupByMsn() Group by the msn column
 * @method     afCrmContactQuery groupByAddressLine1() Group by the address_line1 column
 * @method     afCrmContactQuery groupByAddressLine2() Group by the address_line2 column
 * @method     afCrmContactQuery groupByCity() Group by the city column
 * @method     afCrmContactQuery groupByZipcode() Group by the zipcode column
 * @method     afCrmContactQuery groupByState() Group by the state column
 * @method     afCrmContactQuery groupByCountry() Group by the country column
 *
 * @method     afCrmContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     afCrmContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     afCrmContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     afCrmContactQuery leftJoinafCrmAccount($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmAccount relation
 * @method     afCrmContactQuery rightJoinafCrmAccount($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmAccount relation
 * @method     afCrmContactQuery innerJoinafCrmAccount($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmAccount relation
 *
 * @method     afCrmContactQuery leftJoinafCrmOpportunity($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmOpportunity relation
 * @method     afCrmContactQuery rightJoinafCrmOpportunity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmOpportunity relation
 * @method     afCrmContactQuery innerJoinafCrmOpportunity($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmOpportunity relation
 *
 * @method     afCrmContactQuery leftJoinafCrmActivity($relationAlias = null) Adds a LEFT JOIN clause to the query using the afCrmActivity relation
 * @method     afCrmContactQuery rightJoinafCrmActivity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the afCrmActivity relation
 * @method     afCrmContactQuery innerJoinafCrmActivity($relationAlias = null) Adds a INNER JOIN clause to the query using the afCrmActivity relation
 *
 * @method     afCrmContact findOne(PropelPDO $con = null) Return the first afCrmContact matching the query
 * @method     afCrmContact findOneOrCreate(PropelPDO $con = null) Return the first afCrmContact matching the query, or a new afCrmContact object populated from the query conditions when no match is found
 *
 * @method     afCrmContact findOneById(int $id) Return the first afCrmContact filtered by the id column
 * @method     afCrmContact findOneByAccountId(int $account_id) Return the first afCrmContact filtered by the account_id column
 * @method     afCrmContact findOneByFirstName(string $first_name) Return the first afCrmContact filtered by the first_name column
 * @method     afCrmContact findOneByLastName(string $last_name) Return the first afCrmContact filtered by the last_name column
 * @method     afCrmContact findOneByTitle(string $title) Return the first afCrmContact filtered by the title column
 * @method     afCrmContact findOneByEmail(string $email) Return the first afCrmContact filtered by the email column
 * @method     afCrmContact findOneByPhoneWork(string $phone_work) Return the first afCrmContact filtered by the phone_work column
 * @method     afCrmContact findOneByPhoneMobile(string $phone_mobile) Return the first afCrmContact filtered by the phone_mobile column
 * @method     afCrmContact findOneBySkype(string $skype) Return the first afCrmContact filtered by the skype column
 * @method     afCrmContact findOneByMsn(string $msn) Return the first afCrmContact filtered by the msn column
 * @method     afCrmContact findOneByAddressLine1(string $address_line1) Return the first afCrmContact filtered by the address_line1 column
 * @method     afCrmContact findOneByAddressLine2(string $address_line2) Return the first afCrmContact filtered by the address_line2 column
 * @method     afCrmContact findOneByCity(string $city) Return the first afCrmContact filtered by the city column
 * @method     afCrmContact findOneByZipcode(string $zipcode) Return the first afCrmContact filtered by the zipcode column
 * @method     afCrmContact findOneByState(string $state) Return the first afCrmContact filtered by the state column
 * @method     afCrmContact findOneByCountry(string $country) Return the first afCrmContact filtered by the country column
 *
 * @method     array findById(int $id) Return afCrmContact objects filtered by the id column
 * @method     array findByAccountId(int $account_id) Return afCrmContact objects filtered by the account_id column
 * @method     array findByFirstName(string $first_name) Return afCrmContact objects filtered by the first_name column
 * @method     array findByLastName(string $last_name) Return afCrmContact objects filtered by the last_name column
 * @method     array findByTitle(string $title) Return afCrmContact objects filtered by the title column
 * @method     array findByEmail(string $email) Return afCrmContact objects filtered by the email column
 * @method     array findByPhoneWork(string $phone_work) Return afCrmContact objects filtered by the phone_work column
 * @method     array findByPhoneMobile(string $phone_mobile) Return afCrmContact objects filtered by the phone_mobile column
 * @method     array findBySkype(string $skype) Return afCrmContact objects filtered by the skype column
 * @method     array findByMsn(string $msn) Return afCrmContact objects filtered by the msn column
 * @method     array findByAddressLine1(string $address_line1) Return afCrmContact objects filtered by the address_line1 column
 * @method     array findByAddressLine2(string $address_line2) Return afCrmContact objects filtered by the address_line2 column
 * @method     array findByCity(string $city) Return afCrmContact objects filtered by the city column
 * @method     array findByZipcode(string $zipcode) Return afCrmContact objects filtered by the zipcode column
 * @method     array findByState(string $state) Return afCrmContact objects filtered by the state column
 * @method     array findByCountry(string $country) Return afCrmContact objects filtered by the country column
 *
 * @package    propel.generator.plugins.afCrmPlugin.lib.model.om
 */
abstract class BaseafCrmContactQuery extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseafCrmContactQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'afCrmContact', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new afCrmContactQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    afCrmContactQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof afCrmContactQuery) {
			return $criteria;
		}
		$query = new afCrmContactQuery();
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
	 * @return    afCrmContact|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = afCrmContactPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(afCrmContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    afCrmContact A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT `ID`, `ACCOUNT_ID`, `FIRST_NAME`, `LAST_NAME`, `TITLE`, `EMAIL`, `PHONE_WORK`, `PHONE_MOBILE`, `SKYPE`, `MSN`, `ADDRESS_LINE1`, `ADDRESS_LINE2`, `CITY`, `ZIPCODE`, `STATE`, `COUNTRY` FROM `afcrm_contact` WHERE `ID` = :p0';
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
			$obj = new afCrmContact();
			$obj->hydrate($row);
			afCrmContactPeer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    afCrmContact|array|mixed the result, formatted by the current formatter
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
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(afCrmContactPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(afCrmContactPeer::ID, $keys, Criteria::IN);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(afCrmContactPeer::ID, $id, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByAccountId($accountId = null, $comparison = null)
	{
		if (is_array($accountId)) {
			$useMinMax = false;
			if (isset($accountId['min'])) {
				$this->addUsingAlias(afCrmContactPeer::ACCOUNT_ID, $accountId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($accountId['max'])) {
				$this->addUsingAlias(afCrmContactPeer::ACCOUNT_ID, $accountId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::ACCOUNT_ID, $accountId, $comparison);
	}

	/**
	 * Filter the query on the first_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
	 * $query->filterByFirstName('%fooValue%'); // WHERE first_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $firstName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByFirstName($firstName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($firstName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $firstName)) {
				$firstName = str_replace('*', '%', $firstName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::FIRST_NAME, $firstName, $comparison);
	}

	/**
	 * Filter the query on the last_name column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
	 * $query->filterByLastName('%fooValue%'); // WHERE last_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $lastName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByLastName($lastName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lastName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lastName)) {
				$lastName = str_replace('*', '%', $lastName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::LAST_NAME, $lastName, $comparison);
	}

	/**
	 * Filter the query on the title column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
	 * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $title The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::TITLE, $title, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmContactPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the phone_work column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPhoneWork('fooValue');   // WHERE phone_work = 'fooValue'
	 * $query->filterByPhoneWork('%fooValue%'); // WHERE phone_work LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $phoneWork The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByPhoneWork($phoneWork = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phoneWork)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phoneWork)) {
				$phoneWork = str_replace('*', '%', $phoneWork);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::PHONE_WORK, $phoneWork, $comparison);
	}

	/**
	 * Filter the query on the phone_mobile column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPhoneMobile('fooValue');   // WHERE phone_mobile = 'fooValue'
	 * $query->filterByPhoneMobile('%fooValue%'); // WHERE phone_mobile LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $phoneMobile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByPhoneMobile($phoneMobile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($phoneMobile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $phoneMobile)) {
				$phoneMobile = str_replace('*', '%', $phoneMobile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::PHONE_MOBILE, $phoneMobile, $comparison);
	}

	/**
	 * Filter the query on the skype column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySkype('fooValue');   // WHERE skype = 'fooValue'
	 * $query->filterBySkype('%fooValue%'); // WHERE skype LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $skype The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterBySkype($skype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($skype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $skype)) {
				$skype = str_replace('*', '%', $skype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::SKYPE, $skype, $comparison);
	}

	/**
	 * Filter the query on the msn column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByMsn('fooValue');   // WHERE msn = 'fooValue'
	 * $query->filterByMsn('%fooValue%'); // WHERE msn LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $msn The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByMsn($msn = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($msn)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $msn)) {
				$msn = str_replace('*', '%', $msn);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(afCrmContactPeer::MSN, $msn, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmContactPeer::ADDRESS_LINE1, $addressLine1, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmContactPeer::ADDRESS_LINE2, $addressLine2, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmContactPeer::CITY, $city, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmContactPeer::ZIPCODE, $zipcode, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmContactPeer::STATE, $state, $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(afCrmContactPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query by a related afCrmAccount object
	 *
	 * @param     afCrmAccount|PropelCollection $afCrmAccount The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByafCrmAccount($afCrmAccount, $comparison = null)
	{
		if ($afCrmAccount instanceof afCrmAccount) {
			return $this
				->addUsingAlias(afCrmContactPeer::ACCOUNT_ID, $afCrmAccount->getId(), $comparison);
		} elseif ($afCrmAccount instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(afCrmContactPeer::ACCOUNT_ID, $afCrmAccount->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
	 * Filter the query by a related afCrmOpportunity object
	 *
	 * @param     afCrmOpportunity $afCrmOpportunity  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByafCrmOpportunity($afCrmOpportunity, $comparison = null)
	{
		if ($afCrmOpportunity instanceof afCrmOpportunity) {
			return $this
				->addUsingAlias(afCrmContactPeer::ID, $afCrmOpportunity->getAssignedTo(), $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function filterByafCrmActivity($afCrmActivity, $comparison = null)
	{
		if ($afCrmActivity instanceof afCrmActivity) {
			return $this
				->addUsingAlias(afCrmContactPeer::ID, $afCrmActivity->getContactId(), $comparison);
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
	 * @return    afCrmContactQuery The current query, for fluid interface
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
	 * @param     afCrmContact $afCrmContact Object to remove from the list of results
	 *
	 * @return    afCrmContactQuery The current query, for fluid interface
	 */
	public function prune($afCrmContact = null)
	{
		if ($afCrmContact) {
			$this->addUsingAlias(afCrmContactPeer::ID, $afCrmContact->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseafCrmContactQuery