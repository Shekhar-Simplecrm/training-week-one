<?php


if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class EmployeeAction {

	public function generate_employeeID($bean, $event, $argument) {
		global $db;
		if($bean->fetched_row == false) {
			$id_string = "SCRM0000".$this->random_number(5);
			$bean->employee_id = $id_string;
			
		}
		
	}

	protected function random_number($length) {

	    return join('', array_map(function($value) {
	    	return $value == 1 ? mt_rand(1, 9) : mt_rand(0, 9); 
	    }, range(1, $length)));
	}

	public function update_age($bean, $event, $argument) {
		
		$today = date("Y-m-d");
		$age = $today - $bean->date_of_birth_c;
		$bean->age_c = $age;
	}

	public function send_email_notification($bean, $event, $argument) {

		if($bean->fetched_row == false) {

			require_once "include/SugarPHPMailer.php";

			$mailer=new SugarPHPMailer();
			$mailer->prepForOutbound();
		    $mailer->setMailerForSystem();
		    $admin = new Administration();
		    $settings = $admin->retrieveSettings();
		    
		    $mailer->From     = $settings->settings['notify_fromaddress'];
         	$mailer->FromName = $settings->settings['notify_fromname'];
		    $mailer->IsHTML(true);
		    $mailer->Subject = 'Employee Creation Notification! ';
		    $mailer->Body = "Dear ".$bean->first_name."<br> Please note down your employee ID : ".$bean->employee_id."<br><br>Thanks<br>".$settings->settings['notify_fromname'];
		    $mailer->AddAddress($bean->email1);
		    return $mailer->Send();
		}

	}


}



?>