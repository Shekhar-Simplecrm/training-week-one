<?php

$hook_version = 1; 
$hook_array = Array();

$hook_array['before_save'] = Array();

$hook_array['before_save'][] = array(1, "generate_employeeID", 'custom/modules/scrm_employee/employee_before_save.php', 'EmployeeAction', 'generate_employeeID');

// Hook for update age before save.
$hook_array['before_save'][] = array(5, "update_age", 'custom/modules/scrm_employee/employee_before_save.php', 'EmployeeAction', 'update_age');

// Hook to send email notification.
$hook_array['before_save'][] = array(10, "send_email_notification", 'custom/modules/scrm_employee/employee_before_save.php', 'EmployeeAction', 'send_email_notification');

?>