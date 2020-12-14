<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2020-12-12 07:16:44
$dictionary["scrm_TestQualification"]["fields"]["scrm_person_scrm_testqualification_1"] = array (
  'name' => 'scrm_person_scrm_testqualification_1',
  'type' => 'link',
  'relationship' => 'scrm_person_scrm_testqualification_1',
  'source' => 'non-db',
  'module' => 'scrm_Person',
  'bean_name' => 'scrm_Person',
  'vname' => 'LBL_SCRM_PERSON_SCRM_TESTQUALIFICATION_1_FROM_SCRM_PERSON_TITLE',
  'id_name' => 'scrm_person_scrm_testqualification_1scrm_person_ida',
);
$dictionary["scrm_TestQualification"]["fields"]["scrm_person_scrm_testqualification_1_name"] = array (
  'name' => 'scrm_person_scrm_testqualification_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SCRM_PERSON_SCRM_TESTQUALIFICATION_1_FROM_SCRM_PERSON_TITLE',
  'save' => true,
  'id_name' => 'scrm_person_scrm_testqualification_1scrm_person_ida',
  'link' => 'scrm_person_scrm_testqualification_1',
  'table' => 'scrm_person',
  'module' => 'scrm_Person',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["scrm_TestQualification"]["fields"]["scrm_person_scrm_testqualification_1scrm_person_ida"] = array (
  'name' => 'scrm_person_scrm_testqualification_1scrm_person_ida',
  'type' => 'link',
  'relationship' => 'scrm_person_scrm_testqualification_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SCRM_PERSON_SCRM_TESTQUALIFICATION_1_FROM_SCRM_TESTQUALIFICATION_TITLE',
);


 // created: 2020-12-12 07:32:48
$dictionary['scrm_TestQualification']['fields']['degree_c']['inline_edit']='';
$dictionary['scrm_TestQualification']['fields']['degree_c']['labelValue']='Degree';

 

 // created: 2020-12-12 09:04:17
$dictionary['scrm_TestQualification']['fields']['name']['required']=false;
$dictionary['scrm_TestQualification']['fields']['name']['inline_edit']=true;
$dictionary['scrm_TestQualification']['fields']['name']['duplicate_merge']='disabled';
$dictionary['scrm_TestQualification']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['scrm_TestQualification']['fields']['name']['merge_filter']='disabled';
$dictionary['scrm_TestQualification']['fields']['name']['unified_search']=false;

 

 // created: 2020-12-12 08:55:29
$dictionary['scrm_TestQualification']['fields']['subject_c']['inline_edit']='';
$dictionary['scrm_TestQualification']['fields']['subject_c']['labelValue']='Subject';

 

 // created: 2020-12-12 08:59:53
$dictionary['scrm_TestQualification']['fields']['university_c']['inline_edit']='';
$dictionary['scrm_TestQualification']['fields']['university_c']['labelValue']='University';

 

 // created: 2020-12-12 08:58:12
$dictionary['scrm_TestQualification']['fields']['year_c']['inline_edit']='';
$dictionary['scrm_TestQualification']['fields']['year_c']['labelValue']='Year';

 
?>