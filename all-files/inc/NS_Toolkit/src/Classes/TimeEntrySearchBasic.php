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

class TimeEntrySearchBasic extends SearchRecordBasic {
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $approvalStatus;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $billable;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $billingClass;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $billingStatus;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $class;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $customer;
	/**
	 * Var \NetSuite\Classes\SearchDateField
	 */
	public $date;
	/**
	 * Var \NetSuite\Classes\SearchDateField
	 */
	public $dateCreated;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $department;
	/**
	 * Var \NetSuite\Classes\SearchDoubleField
	 */
	public $duration;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $employee;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $exempt;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $externalId;
	/**
	 * Var \NetSuite\Classes\SearchStringField
	 */
	public $externalIdString;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $internalId;
	/**
	 * Var \NetSuite\Classes\SearchLongField
	 */
	public $internalIdNumber;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $isCharged;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $item;
	/**
	 * Var \NetSuite\Classes\SearchDateField
	 */
	public $lastModified;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $location;
	/**
	 * Var \NetSuite\Classes\SearchStringField
	 */
	public $memo;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $nextApprover;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $paidByPayroll;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $paidExternally;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $payItem;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $productive;
	/**
	 * Var \NetSuite\Classes\SearchMultiSelectField
	 */
	public $subsidiary;
	/**
	 * Var \NetSuite\Classes\SearchEnumMultiSelectField
	 */
	public $type;
	/**
	 * Var \NetSuite\Classes\SearchBooleanField
	 */
	public $utilized;
	/**
	 * Var \NetSuite\Classes\SearchCustomFieldList
	 */
	public $customFieldList;
	public static $paramtypesmap = array(
		'approvalStatus' => 'SearchMultiSelectField',
		'billable' => 'SearchBooleanField',
		'billingClass' => 'SearchMultiSelectField',
		'billingStatus' => 'SearchBooleanField',
		'class' => 'SearchMultiSelectField',
		'customer' => 'SearchMultiSelectField',
		'date' => 'SearchDateField',
		'dateCreated' => 'SearchDateField',
		'department' => 'SearchMultiSelectField',
		'duration' => 'SearchDoubleField',
		'employee' => 'SearchMultiSelectField',
		'exempt' => 'SearchBooleanField',
		'externalId' => 'SearchMultiSelectField',
		'externalIdString' => 'SearchStringField',
		'internalId' => 'SearchMultiSelectField',
		'internalIdNumber' => 'SearchLongField',
		'isCharged' => 'SearchBooleanField',
		'item' => 'SearchMultiSelectField',
		'lastModified' => 'SearchDateField',
		'location' => 'SearchMultiSelectField',
		'memo' => 'SearchStringField',
		'nextApprover' => 'SearchMultiSelectField',
		'paidByPayroll' => 'SearchBooleanField',
		'paidExternally' => 'SearchBooleanField',
		'payItem' => 'SearchMultiSelectField',
		'productive' => 'SearchBooleanField',
		'subsidiary' => 'SearchMultiSelectField',
		'type' => 'SearchEnumMultiSelectField',
		'utilized' => 'SearchBooleanField',
		'customFieldList' => 'SearchCustomFieldList',
	);
}
