<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Caseactivityreport_Form_Report_CaseActivity',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'CaseActivity',
      'description' => 'CaseActivity (com.aghstrategies.caseactivityreport)',
      'class_name' => 'CRM_Caseactivityreport_Form_Report_CaseActivity',
      'report_url' => 'caseactivity',
      'component' => 'CiviCase',
    ),
  ),
);
