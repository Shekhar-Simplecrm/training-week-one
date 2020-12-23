<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-12-17 08:00:14
$dictionary["scrm_work_experience"]["fields"]["scrm_employee_scrm_work_experience_1"] = array (
  'name' => 'scrm_employee_scrm_work_experience_1',
  'type' => 'link',
  'relationship' => 'scrm_employee_scrm_work_experience_1',
  'source' => 'non-db',
  'module' => 'scrm_employee',
  'bean_name' => 'scrm_employee',
  'vname' => 'LBL_SCRM_EMPLOYEE_SCRM_WORK_EXPERIENCE_1_FROM_SCRM_EMPLOYEE_TITLE',
  'id_name' => 'scrm_employee_scrm_work_experience_1scrm_employee_ida',
);
$dictionary["scrm_work_experience"]["fields"]["scrm_employee_scrm_work_experience_1_name"] = array (
  'name' => 'scrm_employee_scrm_work_experience_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCRM_EMPLOYEE_SCRM_WORK_EXPERIENCE_1_FROM_SCRM_EMPLOYEE_TITLE',
  'save' => true,
  'id_name' => 'scrm_employee_scrm_work_experience_1scrm_employee_ida',
  'link' => 'scrm_employee_scrm_work_experience_1',
  'table' => 'scrm_employee',
  'module' => 'scrm_employee',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["scrm_work_experience"]["fields"]["scrm_employee_scrm_work_experience_1scrm_employee_ida"] = array (
  'name' => 'scrm_employee_scrm_work_experience_1scrm_employee_ida',
  'type' => 'link',
  'relationship' => 'scrm_employee_scrm_work_experience_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SCRM_EMPLOYEE_SCRM_WORK_EXPERIENCE_1_FROM_SCRM_WORK_EXPERIENCE_TITLE',
);


 // created: 2020-12-17 07:47:41
$dictionary['scrm_work_experience']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2020-12-17 07:47:41
$dictionary['scrm_work_experience']['fields']['gross_salary_c']['inline_edit']='';
$dictionary['scrm_work_experience']['fields']['gross_salary_c']['labelValue']='Gross Salary';

 

 // created: 2020-12-23 09:25:04
$dictionary['scrm_work_experience']['fields']['organization_name_c']['inline_edit']='';
$dictionary['scrm_work_experience']['fields']['organization_name_c']['labelValue']='Organization Name';

 

 // created: 2020-12-17 07:43:36
$dictionary['scrm_work_experience']['fields']['position_c']['inline_edit']='';
$dictionary['scrm_work_experience']['fields']['position_c']['labelValue']='Position';

 

 // created: 2020-12-23 09:25:04
$dictionary['scrm_work_experience']['fields']['scrm_employee_id_c']['inline_edit']=1;

 

 // created: 2020-12-17 07:46:04
$dictionary['scrm_work_experience']['fields']['year_of_experience_c']['inline_edit']='';
$dictionary['scrm_work_experience']['fields']['year_of_experience_c']['labelValue']='Year of Experience';

 
?>