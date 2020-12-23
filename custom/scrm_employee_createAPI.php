<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$raw_data = (array) json_decode(file_get_contents('php://input'), TRUE);

function restRequest($method, $arguments) {

	$url = "http://localhost/projects/new/simplecrm/service/v4_1/rest.php";
	
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$post = array(
	        "method" => $method,
	        "input_type" => "JSON",
	        "response_type" => "JSON",
	        "rest_data" => json_encode($arguments),
	);

 	curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

	$result = curl_exec($curl);
	
	curl_close($curl);
	return json_decode($result,1);
}


$userAuth = array(
        'user_name' => 'Admin',
        'password' => md5('admin@1234#'),
);

$appName = 'suitcrm';
$nameValueList = array();

$args = array(
            'user_auth' => $userAuth,
            'application_name' => $appName,
            'name_value_list' => $nameValueList
        );

$result = restRequest('login',$args);
$sessId = $result['id'];
// log in user check authentication.

$values_list = array();
foreach ($raw_data as $key => $value) {

	$arr = array(
			"name" => $key,
			"value" => $value,
		);
	array_push($values_list, $arr);
}


$insert_array = array(
	"session" => $sessId,
	"module_name" => "scrm_employee",
	"name_value_list" => $values_list
);

$result = restRequest('set_entry', $insert_array);

if($result){
	// return true;
	echo true;
}else{
	echo false;
	// return false;
}