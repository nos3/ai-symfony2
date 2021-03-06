<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015
 * @package MShop
 * @subpackage Customer
 */


/**
 * Customer class implementation for Friends of Symfony user bundle.
 *
 * @package MShop
 * @subpackage Customer
 */
class MShop_Customer_Manager_FosUser
	extends MShop_Customer_Manager_Default
{
	private $_searchConfig = array(
		'customer.id' => array(
			'label' => 'Customer ID',
			'code' => 'customer.id',
			'internalcode' => 'fos."id"',
			'type' => 'integer',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_INT
		),
		// customer.siteid is not available
		'customer.label' => array(
			'label' => 'Customer label',
			'code' => 'customer.label',
			'internalcode' => 'fos."username_canonical"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR
		),
		'customer.code' => array(
			'label' => 'Customer username',
			'code' => 'customer.code',
			'internalcode' => 'fos."username"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR
		),
		'customer.salutation' => array(
			'label' => 'Customer salutation',
			'code' => 'customer.salutation',
			'internalcode' => 'fos."salutation"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.company'=> array(
			'label' => 'Customer company',
			'code' => 'customer.company',
			'internalcode' => 'fos."company"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.vatid'=> array(
			'label' => 'Customer VAT ID',
			'code' => 'customer.vatid',
			'internalcode' => 'fos."vatid"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.title' => array(
			'label' => 'Customer title',
			'code' => 'customer.title',
			'internalcode' => 'fos."title"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.firstname' => array(
			'label' => 'Customer firstname',
			'code' => 'customer.firstname',
			'internalcode' => 'fos."firstname"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.lastname' => array(
			'label' => 'Customer lastname',
			'code' => 'customer.lastname',
			'internalcode' => 'fos."lastname"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.address1' => array(
			'label' => 'Customer address part one',
			'code' => 'customer.address1',
			'internalcode' => 'fos."address1"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.address2' => array(
			'label' => 'Customer address part two',
			'code' => 'customer.address2',
			'internalcode' => 'fos."address2"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.address3' => array(
			'label' => 'Customer address part three',
			'code' => 'customer.address3',
			'internalcode' => 'fos."address3"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.postal' => array(
			'label' => 'Customer postal',
			'code' => 'customer.postal',
			'internalcode' => 'fos."postal"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.city' => array(
			'label' => 'Customer city',
			'code' => 'customer.city',
			'internalcode' => 'fos."city"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.state' => array(
			'label' => 'Customer state',
			'code' => 'customer.state',
			'internalcode' => 'fos."state"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.languageid' => array(
			'label' => 'Customer language',
			'code' => 'customer.languageid',
			'internalcode' => 'fos."langid"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.countryid' => array(
			'label' => 'Customer country',
			'code' => 'customer.countryid',
			'internalcode' => 'fos."countryid"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.telephone' => array(
			'label' => 'Customer telephone',
			'code' => 'customer.telephone',
			'internalcode' => 'fos."telephone"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.email' => array(
			'label' => 'Customer email',
			'code' => 'customer.email',
			'internalcode' => 'fos."email"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.telefax' => array(
			'label' => 'Customer telefax',
			'code' => 'customer.telefax',
			'internalcode' => 'fos."telefax"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.website' => array(
			'label' => 'Customer website',
			'code' => 'customer.website',
			'internalcode' => 'fos."website"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.birthday' => array(
			'label' => 'Customer birthday',
			'code' => 'customer.birthday',
			'internalcode' => 'fos."birthday"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.password'=> array(
			'label' => 'Customer password',
			'code' => 'customer.password',
			'internalcode' => 'fos."password"',
			'type' => 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.status'=> array(
			'label' => 'Customer status',
			'code' => 'customer.status',
			'internalcode' => 'fos."enabled"',
			'type' => 'integer',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_INT
		),
		'customer.dateverified'=> array(
			'label' => 'Customer verification date',
			'code' => 'customer.dateverified',
			'internalcode' => 'fos."vdate"',
			'type' => 'date',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.ctime'=> array(
			'label' => 'Customer creation time',
			'code' => 'customer.ctime',
			'internalcode' => 'fos."ctime"',
			'type' => 'datetime',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.mtime'=> array(
			'label' => 'Customer modification time',
			'code' => 'customer.mtime',
			'internalcode' => 'fos."mtime"',
			'type' => 'datetime',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.editor'=> array(
			'label'=>'Customer editor',
			'code'=>'customer.editor',
			'internalcode' => 'fos."editor"',
			'type'=> 'string',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
	);

	private $_addressManager;


	/**
	 * Removes old entries from the storage.
	 *
	 * @param array $siteids List of IDs for sites whose entries should be deleted
	 */
	public function cleanup( array $siteids )
	{
		$path = 'classes/customer/manager/submanagers';
		foreach( $this->_getContext()->getConfig()->get( $path, array( 'address', 'list' ) ) as $domain ) {
			$this->getSubManager( $domain )->cleanup( $siteids );
		}
	}


	/**
	 * Removes multiple items specified by ids in the array.
	 *
	 * @param array $ids List of IDs
	 */
	public function deleteItems( array $ids )
	{
		$path = 'mshop/customer/manager/fosuser/item/delete';
		$sql = $this->_getContext()->getConfig()->get( $path, $path );

		$this->_deleteItems( $ids, $sql, false );
	}


	/**
	 * Returns the list attributes that can be used for searching.
	 *
	 * @param boolean $withsub Return also attributes of sub-managers if true
	 * @return array List of attribute items implementing MW_Common_Criteria_Attribute_Interface
	 */
	public function getSearchAttributes( $withsub = true )
	{
		$path = 'classes/customer/manager/submanagers';

		return $this->_getSearchAttributes( $this->_searchConfig, $path, array( 'address', 'list' ), $withsub );
	}


	/**
	 * Instantiates a new customer item object.
	 *
	 * @return MShop_Customer_Item_Interface New customer item object
	 */
	public function createItem()
	{
		return $this->_createItem();
	}


	/**
	 * Saves a customer item object.
	 *
	 * @param MShop_Customer_Item_Interface $item Customer item object
	 * @param boolean $fetch True if the new ID should be returned in the item
	 */
	public function saveItem( MShop_Common_Item_Interface $item, $fetch = true )
	{
		$iface = 'MShop_Customer_Item_Interface';
		if( !( $item instanceof $iface ) ) {
			throw new MShop_Customer_Exception( sprintf( 'Object is not of required type "%1$s"', $iface ) );
		}

		if( !$item->isModified() ) { return; }

		$context = $this->_getContext();
		$dbm = $context->getDatabaseManager();
		$dbname = $this->_getResourceName();
		$conn = $dbm->acquire( $dbname );

		try
		{
			$id = $item->getId();
			$date = date( 'Y-m-d H:i:s' );
			$billingAddress = $item->getPaymentAddress();

			if( $id === null )
			{
				/** mshop/customer/manager/fosuser/item/insert
				 * Inserts a new customer record into the database table
				 *
				 * Items with no ID yet (i.e. the ID is NULL) will be created in
				 * the database and the newly created ID retrieved afterwards
				 * using the "newid" SQL statement.
				 *
				 * The SQL statement must be a string suitable for being used as
				 * prepared statement. It must include question marks for binding
				 * the values from the customer item to the statement before they are
				 * sent to the database server. The number of question marks must
				 * be the same as the number of columns listed in the INSERT
				 * statement. The order of the columns must correspond to the
				 * order in the saveItems() method, so the correct values are
				 * bound to the columns.
				 *
				 * The SQL statement should conform to the ANSI standard to be
				 * compatible with most relational database systems. This also
				 * includes using double quotes for table and column names.
				 *
				 * @param string SQL statement for inserting records
				 * @since 2015.01
				 * @category Developer
				 * @see mshop/customer/manager/fosuser/item/update
				 * @see mshop/customer/manager/fosuser/item/newid
				 * @see mshop/customer/manager/fosuser/item/delete
				 * @see mshop/customer/manager/fosuser/item/search
				 * @see mshop/customer/manager/fosuser/item/count
				 */
				$path = 'mshop/customer/manager/fosuser/item/insert';
			}
			else
			{
				/** mshop/customer/manager/fosuser/item/update
				 * Updates an existing customer record in the database
				 *
				 * Items which already have an ID (i.e. the ID is not NULL) will
				 * be updated in the database.
				 *
				 * The SQL statement must be a string suitable for being used as
				 * prepared statement. It must include question marks for binding
				 * the values from the customer item to the statement before they are
				 * sent to the database server. The order of the columns must
				 * correspond to the order in the saveItems() method, so the
				 * correct values are bound to the columns.
				 *
				 * The SQL statement should conform to the ANSI standard to be
				 * compatible with most relational database systems. This also
				 * includes using double quotes for table and column names.
				 *
				 * @param string SQL statement for updating records
				 * @since 2015.01
				 * @category Developer
				 * @see mshop/customer/manager/fosuser/item/insert
				 * @see mshop/customer/manager/fosuser/item/newid
				 * @see mshop/customer/manager/fosuser/item/delete
				 * @see mshop/customer/manager/fosuser/item/search
				 * @see mshop/customer/manager/fosuser/item/count
				 */
				$path = 'mshop/customer/manager/fosuser/item/update';
			}

			$stmt = $this->_getCachedStatement( $conn, $path );

			$stmt->bind( 1, $item->getCode() ); // canonical username
			$stmt->bind( 2, $item->getCode() ); // username
			$stmt->bind( 3, $billingAddress->getCompany() );
			$stmt->bind( 4, $billingAddress->getVatID() );
			$stmt->bind( 5, $billingAddress->getSalutation() );
			$stmt->bind( 6, $billingAddress->getTitle() );
			$stmt->bind( 7, $billingAddress->getFirstname() );
			$stmt->bind( 8, $billingAddress->getLastname() );
			$stmt->bind( 9, $billingAddress->getAddress1() );
			$stmt->bind( 10, $billingAddress->getAddress2() );
			$stmt->bind( 11, $billingAddress->getAddress3() );
			$stmt->bind( 12, $billingAddress->getPostal() );
			$stmt->bind( 13, $billingAddress->getCity() );
			$stmt->bind( 14, $billingAddress->getState() );
			$stmt->bind( 15, $billingAddress->getCountryId() );
			$stmt->bind( 16, $billingAddress->getLanguageId() );
			$stmt->bind( 17, $billingAddress->getTelephone() );
			$stmt->bind( 18, $billingAddress->getEmail() );
			$stmt->bind( 19, $billingAddress->getEmail() );
			$stmt->bind( 20, $billingAddress->getTelefax() );
			$stmt->bind( 21, $billingAddress->getWebsite() );
			$stmt->bind( 22, $item->getBirthday() );
			$stmt->bind( 23, $item->getStatus(), MW_DB_Statement_Abstract::PARAM_INT );
			$stmt->bind( 24, $item->getDateVerified() );
			$stmt->bind( 25, $item->getPassword() );
			$stmt->bind( 26, $date ); // Modification time
			$stmt->bind( 27, $context->getEditor() );
			$stmt->bind( 28, serialize( $item->getRoles() ) );

			if( $id !== null ) {
				$stmt->bind( 29, $id, MW_DB_Statement_Abstract::PARAM_INT );
				$item->setId( $id );
			} else {
				$stmt->bind( 29, $date ); // Creation time
			}

			$stmt->execute()->finish();

			if( $id === null && $fetch === true )
			{
				/** mshop/customer/manager/fosuser/item/newid
				 * Retrieves the ID generated by the database when inserting a new record
				 *
				 * As soon as a new record is inserted into the database table,
				 * the database server generates a new and unique identifier for
				 * that record. This ID can be used for retrieving, updating and
				 * deleting that specific record from the table again.
				 *
				 * For MySQL:
				 *  SELECT LAST_INSERT_ID()
				 * For PostgreSQL:
				 *  SELECT currval('seq_mcus_id')
				 * For SQL Server:
				 *  SELECT SCOPE_IDENTITY()
				 * For Oracle:
				 *  SELECT "seq_mcus_id".CURRVAL FROM DUAL
				 *
				 * There's no way to retrive the new ID by a SQL statements that
				 * fits for most database servers as they implement their own
				 * specific way.
				 *
				 * @param string SQL statement for retrieving the last inserted record ID
				 * @since 2015.01
				 * @category Developer
				 * @see mshop/customer/manager/fosuser/item/insert
				 * @see mshop/customer/manager/fosuser/item/update
				 * @see mshop/customer/manager/fosuser/item/delete
				 * @see mshop/customer/manager/fosuser/item/search
				 * @see mshop/customer/manager/fosuser/item/count
				 */
				$path = 'mshop/customer/manager/fosuser/item/newid';
				$item->setId( $this->_newId( $conn, $context->getConfig()->get( $path, $path ) ) );
			}

			$dbm->release( $conn, $dbname );
		}
		catch( Exception $e )
		{
			$dbm->release( $conn, $dbname );
			throw $e;
		}
	}


	/**
	 * Returns the item objects matched by the given search criteria.
	 *
	 * @param MW_Common_Criteria_Interface $search Search criteria object
	 * @param integer &$total Number of items that are available in total
	 * @return array List of items implementing MShop_Customer_Item_Interface
	 * @throws MShop_Customer_Exception If creating items failed
	 */
	public function searchItems( MW_Common_Criteria_Interface $search, array $ref = array(), &$total = null )
	{
		$dbm = $this->_getContext()->getDatabaseManager();
		$dbname = $this->_getResourceName();
		$conn = $dbm->acquire( $dbname );
		$map = array();

		try
		{
			$level = MShop_Locale_Manager_Abstract::SITE_ALL;
			$cfgPathSearch = 'mshop/customer/manager/fosuser/item/search';
			$cfgPathCount = 'mshop/customer/manager/fosuser/item/count';
			$required = array( 'customer' );

			$results = $this->_searchItems( $conn, $search, $cfgPathSearch, $cfgPathCount, $required, $total, $level );
			while( ( $row = $results->fetch() ) !== false ) {
				$map[ $row['id'] ] = $row;
			}

			$dbm->release( $conn, $dbname );
		}
		catch( Exception $e )
		{
			$dbm->release( $conn, $dbname  );
			throw $e;
		}

		return $this->_buildItems( $map, $ref, 'customer' );
	}


	/**
	 * Returns a new manager for customer extensions
	 *
	 * @param string $manager Name of the sub manager type in lower case
	 * @param string|null $name Name of the implementation, will be from configuration (or Default) if null
	 * @return mixed Manager for different extensions, e.g stock, tags, locations, etc.
	 */
	public function getSubManager( $manager, $name = null )
	{
		return $this->_getSubManager( 'customer', $manager, ( $name === null ? 'FosUser' : $name ) );
	}


	/**
	 * Creates a new customer item.
	 *
	 * @param array $values List of attributes for customer item
	 * @param array $listItems List items associated to the customer item
	 * @param array $refItems Items referenced by the customer item via the list items
	 * @return MShop_Customer_Item_Interface New customer item
	 */
	protected function _createItem( array $values = array(), array $listItems = array(), array $refItems = array() )
	{
		if( !isset( $this->_addressManager ) ) {
			$this->_addressManager = $this->getSubManager( 'address' );
		}

		if( isset( $values['roles'] ) ) {
			$values['roles'] = unserialize( $values['roles'] );
		}

		$helper = $this->_getPasswordHelper();
		$address = $this->_addressManager->createItem();

		return new MShop_Customer_Item_FosUser( $address, $values, $listItems, $refItems, null, $helper );
	}
}
