<?php
$module_name = 'scrm_TestQualification';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'degree_c',
            'label' => 'LBL_DEGREE',
          ),
          1 => 
          array (
            'name' => 'subject_c',
            'label' => 'LBL_SUBJECT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'university_c',
            'label' => 'LBL_UNIVERSITY',
          ),
          1 => 
          array (
            'name' => 'year_c',
            'label' => 'LBL_YEAR',
          ),
        ),
      ),
    ),
  ),
);
;
?>
