<?php

$hook_version = 1; 
$hook_array = Array();

// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Calculate age on basis of dob', 'custom/modules/scrm_person/age.php','Age', 'CalculateAge');
// $hook_array['before_save'][] = Array(1, 'Language test', 'custom/modules/scrm_person/age.php','Age', 'language_test');

?>