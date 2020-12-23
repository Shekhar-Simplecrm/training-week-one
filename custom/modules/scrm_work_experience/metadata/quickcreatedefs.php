<?php
$module_name = 'scrm_work_experience';
$_object_name = 'scrm_work_experience';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'scrm_employee_scrm_work_experience_1_name',
            'label' => 'LBL_SCRM_EMPLOYEE_SCRM_WORK_EXPERIENCE_1_FROM_SCRM_EMPLOYEE_TITLE',
          ),
          1 => 
          array (
            'name' => 'position_c',
            'label' => 'LBL_POSITION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'year_of_experience_c',
            'label' => 'LBL_YEAR_OF_EXPERIENCE',
          ),
          1 => 
          array (
            'name' => 'gross_salary_c',
            'label' => 'LBL_GROSS_SALARY',
          ),
        ),
        2 => 
        array (
          0 => 'website',
        ),
      ),
    ),
  ),
);
;
?>
