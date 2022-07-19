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

class WorkOrderCompletion extends Record {
	/**
	 * Var string
	 */
	public $createdDate;
	/**
	 * Var string
	 */
	public $lastModifiedDate;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $customForm;
	/**
	 * Var string
	 */
	public $tranId;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $item;
	/**
	 * Var float
	 */
	public $quantity;
	/**
	 * Var float
	 */
	public $scrapQuantity;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $units;
	/**
	 * Var boolean
	 */
	public $isBackflush;
	/**
	 * Var float
	 */
	public $orderQuantity;
	/**
	 * Var float
	 */
	public $total;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $createdFrom;
	/**
	 * Var \NetSuite\Classes\InventoryDetail
	 */
	public $inventoryDetail;
	/**
	 * Var string
	 */
	public $tranDate;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $postingPeriod;
	/**
	 * Var string
	 */
	public $memo;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $subsidiary;
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
	public $revision;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $startOperation;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $endOperation;
	/**
	 * Var float
	 */
	public $completedQuantity;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $manufacturingRouting;
	/**
	 * Var \NetSuite\Classes\WorkOrderCompletionComponentList
	 */
	public $componentList;
	/**
	 * Var \NetSuite\Classes\WorkOrderCompletionOperationList
	 */
	public $operationList;
	/**
	 * Var \NetSuite\Classes\CustomFieldList
	 */
	public $customFieldList;
	/**
	 * Var string
	 */
	public $internalId;
	/**
	 * Var string
	 */
	public $externalId;
	public static $paramtypesmap = array(
		'createdDate' => 'dateTime',
		'lastModifiedDate' => 'dateTime',
		'customForm' => 'RecordRef',
		'tranId' => 'string',
		'item' => 'RecordRef',
		'quantity' => 'float',
		'scrapQuantity' => 'float',
		'units' => 'RecordRef',
		'isBackflush' => 'boolean',
		'orderQuantity' => 'float',
		'total' => 'float',
		'createdFrom' => 'RecordRef',
		'inventoryDetail' => 'InventoryDetail',
		'tranDate' => 'dateTime',
		'postingPeriod' => 'RecordRef',
		'memo' => 'string',
		'subsidiary' => 'RecordRef',
		'department' => 'RecordRef',
		'class' => 'RecordRef',
		'location' => 'RecordRef',
		'revision' => 'RecordRef',
		'startOperation' => 'RecordRef',
		'endOperation' => 'RecordRef',
		'completedQuantity' => 'float',
		'manufacturingRouting' => 'RecordRef',
		'componentList' => 'WorkOrderCompletionComponentList',
		'operationList' => 'WorkOrderCompletionOperationList',
		'customFieldList' => 'CustomFieldList',
		'internalId' => 'string',
		'externalId' => 'string',
	);
}
