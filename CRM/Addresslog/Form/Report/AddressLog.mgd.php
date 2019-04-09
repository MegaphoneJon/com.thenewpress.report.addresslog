<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Addresslog_Form_Report_AddressLog',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'AddressLog',
      'description' => 'AddressLog (com.thenewpress.report.addresslog)',
      'class_name' => 'CRM_Addresslog_Form_Report_AddressLog',
      'report_url' => 'com.thenewpress.report.addresslog/addresslog',
      'component' => '',
    ),
  ),
);