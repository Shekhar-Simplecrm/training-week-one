<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-12-16 10:42:41
$dictionary["scrm_Qualification"]["fields"]["scrm_employee_scrm_qualification_1"] = array (
  'name' => 'scrm_employee_scrm_qualification_1',
  'type' => 'link',
  'relationship' => 'scrm_employee_scrm_qualification_1',
  'source' => 'non-db',
  'module' => 'scrm_employee',
  'bean_name' => 'scrm_employee',
  'vname' => 'LBL_SCRM_EMPLOYEE_SCRM_QUALIFICATION_1_FROM_SCRM_EMPLOYEE_TITLE',
  'id_name' => 'scrm_employee_scrm_qualification_1scrm_employee_ida',
);
$dictionary["scrm_Qualification"]["fields"]["scrm_employee_scrm_qualification_1_name"] = array (
  'name' => 'scrm_employee_scrm_qualification_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCRM_EMPLOYEE_SCRM_QUALIFICATION_1_FROM_SCRM_EMPLOYEE_TITLE',
  'save' => true,
  'id_name' => 'scrm_employee_scrm_qualification_1scrm_employee_ida',
  'link' => 'scrm_employee_scrm_qualification_1',
  'table' => 'scrm_employee',
  'module' => 'scrm_employee',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["scrm_Qualification"]["fields"]["scrm_employee_scrm_qualification_1scrm_employee_ida"] = array (
  'name' => 'scrm_employee_scrm_qualification_1scrm_employee_ida',
  'type' => 'link',
  'relationship' => 'scrm_employee_scrm_qualification_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SCRM_EMPLOYEE_SCRM_QUALIFICATION_1_FROM_SCRM_QUALIFICATION_TITLE',
);

?>