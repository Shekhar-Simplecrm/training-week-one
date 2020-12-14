<?php

require_once "modules/scrm_Person/scrm_Person.php";

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$person_obj = new scrm_Person();

$person_obj->create_person();

?>