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

class StatisticalJournalEntryLine {
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $account;
	/**
	 * Var integer
	 */
	public $line;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $location;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $scheduleNum;
	/**
	 * Var float
	 */
	public $debit;
	/**
	 * Var string
	 */
	public $memo;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $entity;
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
	public $lineUnit;
	/**
	 * Var string
	 */
	public $previewDebit;
	/**
	 * Var \NetSuite\Classes\CustomFieldList
	 */
	public $customFieldList;
	public static $paramtypesmap = array(
		'account' => 'RecordRef',
		'line' => 'integer',
		'location' => 'RecordRef',
		'scheduleNum' => 'RecordRef',
		'debit' => 'float',
		'memo' => 'string',
		'entity' => 'RecordRef',
		'department' => 'RecordRef',
		'class' => 'RecordRef',
		'lineUnit' => 'RecordRef',
		'previewDebit' => 'string',
		'customFieldList' => 'CustomFieldList',
	);
}
