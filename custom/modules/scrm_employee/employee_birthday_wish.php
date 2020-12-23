<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $db;

$today = date('Y-m-d');


$bean  = BeanFactory::getBean('scrm_employee');

$query = "scrm_employee.deleted = 0";

$employee_list = $bean->get_full_list('', $query);

foreach ($employee_list as  $employee) {
	
	if(trim($employee->date_of_birth_c) == $today) {

		$query = "SELECT email_address FROM crm_db.email_addresses e INNER JOIN email_addr_bean_rel er ON er.email_address_id  = e.id WHERE er.deleted = 0 AND er.bean_id = '$employee->id'";
		
		$email_ = $db->query($query);

		$email_id = $db->fetchByAssoc($email_);

		require_once "include/SugarPHPMailer.php";

		$mailer=new SugarPHPMailer();
		$mailer->prepForOutbound();
	    $mailer->setMailerForSystem();
	    $admin = new Administration();
	    $settings = $admin->retrieveSettings();
	    
	    $mailer->From     = $settings->settings['notify_fromaddress'];
     	$mailer->FromName = $settings->settings['notify_fromname'];
	    $mailer->IsHTML(true);
	    $mailer->Subject = 'Birthday Wish! ';
	    $mailer->Body = "Dear ".$bean->first_name."<br> Wishing you very happy birthday. <br><br> Thanks<br>".$settings->settings['notify_fromname'];
	    $mailer->AddAddress($email_id['email_address']);
	    return $mailer->Send();
	}
	
}
echo "Entry point run success!";
?>