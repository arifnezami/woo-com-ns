<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 *
 * Package    ryanwinchester/netsuite-php
 * Copyright  Copyright (c) Ryan Winchester
 * License    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * Link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * Copyright  Copyright (c) NetSuite Inc.
 * License    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * Link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class CouponCodeSearchBasic extends SearchRecordBasic {
	/**
	 * Var \NetSuite\Classes\SearchStringField
	 */
	public $code;
	/**
	 * Var \NetSuite\Classes\SearchDateField
	 */
	public $dateSent;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * Var \NetSuite\Classes\SearchStringField
	 */
	public $externalIdString;
	/**
	 * Var \NetSuite\Classes\SearchLongField
	 */
	public $id;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * Var \NetSuite\Classes\SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $promotion;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $recipient;
	/**
	 * Var \NetSuite\Classes\SearchLongField
	 */
	public $useCount;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $used;
	public static $paramtypesmap = array(
		'code' => 'SearchStringField',
		'dateSent' => 'SearchDateField',
		'externalId' => 'SearchMultiSelectField',
		'externalIdString' => 'SearchStringField',
		'id' => 'SearchLongField',
		'internalId' => 'SearchMultiSelectField',
		'internalIdNumber' => 'SearchLongField',
		'promotion' => 'SearchMultiSelectField',
		'recipient' => 'SearchMultiSelectField',
		'useCount' => 'SearchLongField',
		'used' => 'SearchBooleanField',
	);
}
