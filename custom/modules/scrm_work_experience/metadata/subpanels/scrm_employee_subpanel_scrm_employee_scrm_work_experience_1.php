<?php
// created: 2020-12-24 08:16:56
$subpanel_layout['list_fields'] = array (
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'scrm_work_experience',
    'width' => '5%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'scrm_work_experience',
    'width' => '4%',
    'default' => true,
  ),
  'organization_name_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ORGANIZATION_NAME',
    'id' => 'SCRM_EMPLOYEE_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'scrm_work_experience',
    'target_record_key' => 'scrm_work_experience_id_c',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '30%',
    'default' => true,
  ),
  'website' => 
  array (
    'type' => 'url',
    'vname' => 'LBL_WEBSITE',
    'width' => '30%',
    'default' => true,
  ),
  'position_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_POSITION',
    'width' => '30%',
  ),
  'year_of_experience_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_YEAR_OF_EXPERIENCE',
    'width' => '10%',
  ),
);