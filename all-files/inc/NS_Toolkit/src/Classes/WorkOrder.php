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

class WorkOrder extends Record {
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
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $manufacturingRouting;
	/**
	 * Var boolean
	 */
	public $autoCalculateLag;
	/**
	 * Var string
	 */
	public $status;
	/**
	 * Var string
	 */
	public $tranId;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $entity;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $job;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $assemblyItem;
	/**
	 * Var boolean
	 */
	public $expandAssembly;
	/**
	 * Var boolean
	 */
	public $isWip;
	/**
	 * Var float
	 */
	public $quantity;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $billOfMaterials;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $units;
	/**
	 * Var string
	 */
	public $tranDate;
	/**
	 * Var \NetSuite\Classes\WorkOrderOrderStatus
	 */
	public $orderStatus;
	/**
	 * Var boolean
	 */
	public $firmed;
	/**
	 * Var string
	 */
	public $memo;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $department;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $class;
	/**
	 * Var \NetSuite\Classes\WorkOrderItemList
	 */
	public $itemList;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $location;
	/**
	 * Var \NetSuite\Classes\WorkOrderSchedulingMethod
	 */
	public $schedulingMethod;
	/**
	 * Var \NetSuite\Classes\SalesTeamList
	 */
	public $salesTeamList;
	/**
	 * Var \NetSuite\Classes\PartnersList
	 */
	public $partnersList;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $createdFrom;
	/**
	 * Var string
	 */
	public $sourceTransactionId;
	/**
	 * Var integer
	 */
	public $sourceTransactionLine;
	/**
	 * Var boolean
	 */
	public $specialOrder;
	/**
	 * Var float
	 */
	public $buildable;
	/**
	 * Var \NetSuite\Classes\CustomFieldList
	 */
	public $options;
	/**
	 * Var float
	 */
	public $built;
	/**
	 * Var string
	 */
	public $startDate;
	/**
	 * Var string
	 */
	public $endDate;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $revision;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $billOfMaterialsRevision;
	/**
	 * Var \NetSuite\Classes\RecordRef
	 */
	public $subsidiary;
	/**
	 * Var \NetSuite\Classes\AccountingBookDetailList
	 */
	public $accountingBookDetailList;
	/**
	 * Var string
	 */
	public $requestedDate;
	/**
	 * Var string
	 */
	public $actualProductionStartDate;
	/**
	 * Var string
	 */
	public $actualProductionEndDate;
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
		'manufacturingRouting' => 'RecordRef',
		'autoCalculateLag' => 'boolean',
		'status' => 'string',
		'tranId' => 'string',
		'entity' => 'RecordRef',
		'job' => 'RecordRef',
		'assemblyItem' => 'RecordRef',
		'expandAssembly' => 'boolean',
		'isWip' => 'boolean',
		'quantity' => 'float',
		'billOfMaterials' => 'RecordRef',
		'units' => 'RecordRef',
		'tranDate' => 'dateTime',
		'orderStatus' => 'WorkOrderOrderStatus',
		'firmed' => 'boolean',
		'memo' => 'string',
		'department' => 'RecordRef',
		'class' => 'RecordRef',
		'itemList' => 'WorkOrderItemList',
		'location' => 'RecordRef',
		'schedulingMethod' => 'WorkOrderSchedulingMethod',
		'salesTeamList' => 'SalesTeamList',
		'partnersList' => 'PartnersList',
		'createdFrom' => 'RecordRef',
		'sourceTransactionId' => 'string',
		'sourceTransactionLine' => 'integer',
		'specialOrder' => 'boolean',
		'buildable' => 'float',
		'options' => 'CustomFieldList',
		'built' => 'float',
		'startDate' => 'dateTime',
		'endDate' => 'dateTime',
		'revision' => 'RecordRef',
		'billOfMaterialsRevision' => 'RecordRef',
		'subsidiary' => 'RecordRef',
		'accountingBookDetailList' => 'AccountingBookDetailList',
		'requestedDate' => 'dateTime',
		'actualProductionStartDate' => 'dateTime',
		'actualProductionEndDate' => 'dateTime',
		'customFieldList' => 'CustomFieldList',
		'internalId' => 'string',
		'externalId' => 'string',
	);
}
