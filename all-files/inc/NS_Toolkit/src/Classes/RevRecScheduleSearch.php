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

class RevRecScheduleSearch extends SearchRecord {
	/**
	 * Var \NetSuite\Classes\RevRecScheduleSearchBasic
	 */
	public $basic;
	/**
	 * Var \NetSuite\Classes\TransactionSearchBasic
	 */
	public $appliedToTransactionJoin;
	/**
	 * Var \NetSuite\Classes\CustomerSearchBasic
	 */
	public $customerJoin;
	/**
	 * Var \NetSuite\Classes\ItemSearchBasic
	 */
	public $itemJoin;
	/**
	 * Var \NetSuite\Classes\TransactionSearchBasic
	 */
	public $transactionJoin;
	/**
	 * Var \NetSuite\Classes\EmployeeSearchBasic
	 */
	public $userJoin;
	public static $paramtypesmap = array(
		'basic' => 'RevRecScheduleSearchBasic',
		'appliedToTransactionJoin' => 'TransactionSearchBasic',
		'customerJoin' => 'CustomerSearchBasic',
		'itemJoin' => 'ItemSearchBasic',
		'transactionJoin' => 'TransactionSearchBasic',
		'userJoin' => 'EmployeeSearchBasic',
	);
}
