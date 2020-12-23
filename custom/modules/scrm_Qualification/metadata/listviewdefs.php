<?php
$module_name = 'scrm_Qualification';
$listViewDefs [$module_name] = 
array (
  'DEGREE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DEGREE',
    'width' => '10%',
    'default' => true,
    'link' => true
  ),
  'SUBJECT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBJECT',
    'width' => '10%',
    'default' => true,
  ),
  'UNIVERSITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_UNIVERSITY',
    'width' => '10%',
    'default' => true,
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
