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

class CustomPurchaseExpense {
	/**
	 * Var integer
	 */
	public $line;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $category;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $account;
	/**
	 * Var float
	 */
	public $amount;
	/**
	 * Var float
	 */
	public $taxAmount;
	/**
	 * Var string
	 */
	public $memo;
	/**
	 * Var float
	 */
	public $grossAmt;
	/**
	 * Var string
	 */
	public $taxDetailsReference;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $department;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $class;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $location;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $customer;
	/**
	 * Var boolean
	 */
	public $isBillable;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $projectTask;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $amortizationSched;
	/**
	 * Var string
	 */
	public $amortizStartDate;
	/**
	 * Var string
	 */
	public $amortizationEndDate;
	/**
	 * Var string
	 */
	public $amortizationResidual;
	/**
	 * Var \NetSuite\Classes\CustomFieldList
	 */
	public $customFieldList;
	public static $paramtypesmap = array(
		'line' => 'integer',
		'category' => 'RecordRef',
		'account' => 'RecordRef',
		'amount' => 'float',
		'taxAmount' => 'float',
		'memo' => 'string',
		'grossAmt' => 'float',
		'taxDetailsReference' => 'string',
		'department' => 'RecordRef',
		'class' => 'RecordRef',
		'location' => 'RecordRef',
		'customer' => 'RecordRef',
		'isBillable' => 'boolean',
		'projectTask' => 'RecordRef',
		'amortizationSched' => 'RecordRef',
		'amortizStartDate' => 'dateTime',
		'amortizationEndDate' => 'dateTime',
		'amortizationResidual' => 'string',
		'customFieldList' => 'CustomFieldList',
	);
}
