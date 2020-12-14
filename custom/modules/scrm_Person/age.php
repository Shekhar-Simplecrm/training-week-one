<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class Age {

    public function CalculateAge($bean = NULL, $event = NULL, $arguments = NULL) {
        global $db;
        $today = date('Y-m-d');
        $age = $today - $bean->date_of_birth_c;
        $bean->age_c = $age;
    }

}
?>