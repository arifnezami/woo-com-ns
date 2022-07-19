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

class EmployeeAccruedTime {
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $payrollItem;
	/**
	 * Var float
	 */
	public $accruedHours;
	/**
	 * Var float
	 */
	public $accrualRate;
	/**
	 * Var float
	 */
	public $monetaryRate;
	/**
	 * Var boolean
	 */
	public $resetAccruedHoursAtYearEnd;
	/**
	 * Var \NetSuite\Classes\EmployeeAccruedTimeAccrualMethod
	 */
	public $accrualMethod;
	/**
	 * Var float
	 */
	public $maximumAccruedHours;
	/**
	 * Var boolean
	 */
	public $inactive;
	/**
	 * Var string
	 */
	public $effectiveDate;
	/**
	 * Var string
	 */
	public $expirationDate;
	public static $paramtypesmap = array(
		'payrollItem' => 'RecordRef',
		'accruedHours' => 'float',
		'accrualRate' => 'float',
		'monetaryRate' => 'float',
		'resetAccruedHoursAtYearEnd' => 'boolean',
		'accrualMethod' => 'EmployeeAccruedTimeAccrualMethod',
		'maximumAccruedHours' => 'float',
		'inactive' => 'boolean',
		'effectiveDate' => 'dateTime',
		'expirationDate' => 'dateTime',
	);
}
