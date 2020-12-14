<?php
/*
* This entry point is create to create a new employee by bean.
* and call this function outside the browser.
*/
require_once "modules/scrm_employee/scrm_employee.php";

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$employee = new scrm_employee;

$employee->create_employee();

?>