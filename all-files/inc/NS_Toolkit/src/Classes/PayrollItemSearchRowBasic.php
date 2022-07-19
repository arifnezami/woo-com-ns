<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
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

class PayrollItemSearchRowBasic extends SearchRowBasic {
	/**
	 * Var \NetSuite\Classes\SearchColumnStringField[]
	 */
	public $expenseAccount;
	/**
	 * Var \NetSuite\Classes\SearchColumnSelectField[]
	 */
	public $externalId;
	/**
	 * Var \NetSuite\Classes\SearchColumnSelectField[]
	 */
	public $internalId;
	/**
	 * Var \NetSuite\Classes\SearchColumnBooleanField[]
	 */
	public $isInactive;
	/**
	 * Var \NetSuite\Classes\SearchColumnStringField[]
	 */
	public $itemTypeNoHierarchy;
	/**
	 * Var \NetSuite\Classes\SearchColumnStringField[]
	 */
	public $liabilityAccount;
	/**
	 * Var \NetSuite\Classes\SearchColumnStringField[]
	 */
	public $name;
	/**
	 * Var \NetSuite\Classes\SearchColumnStringField[]
	 */
	public $subsidiary;
	/**
	 * Var \NetSuite\Classes\SearchColumnStringField[]
	 */
	public $vendor;
	/**
	 * Var \NetSuite\Classes\SearchColumnCustomFieldList
	 */
	public $customFieldList;
	public static $paramtypesmap = array(
		'expenseAccount' => 'SearchColumnStringField[]',
		'externalId' => 'SearchColumnSelectField[]',
		'internalId' => 'SearchColumnSelectField[]',
		'isInactive' => 'SearchColumnBooleanField[]',
		'itemTypeNoHierarchy' => 'SearchColumnStringField[]',
		'liabilityAccount' => 'SearchColumnStringField[]',
		'name' => 'SearchColumnStringField[]',
		'subsidiary' => 'SearchColumnStringField[]',
		'vendor' => 'SearchColumnStringField[]',
		'customFieldList' => 'SearchColumnCustomFieldList',
	);
}