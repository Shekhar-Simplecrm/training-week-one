<?php
$module_name = 'scrm_TestQualification';
$listViewDefs [$module_name] = 
array (
  'SUBJECT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_SUBJECT',
    'width' => '10%',
  ),
  'DEGREE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DEGREE',
    'width' => '10%',
  ),
  'UNIVERSITY_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UNIVERSITY',
    'width' => '10%',
  ),
  'YEAR_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_YEAR',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
;
?>
