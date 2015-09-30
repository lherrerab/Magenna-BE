<?php
    
    header("Content-Type:application/json");
    	
    if(!empty($_GET['service'])){
    	$service = 	$_GET['service'];
		
		if($service == "login"){
			verifyCredentials();
		}
		
		if($service == "allContants"){
			getAllContacts();
		}
	}
	
	function getAllContacts(){
		$contacts = array(
						array(
								'name' => 'Jaime Blanco',
								'phone' => '3157252650',
								'email' => 'jblanco@hotmail.com',
								'added_on' => new MongoDate(strtotime('30-09-1983 00:00:00'))
								),						
						array(
								'name' => 'Camila Pata',
								'phone' => '3017202510',
								'email' => 'cpata@hotmail.com',
								'added_on' => new MongoDate(strtotime('28-10-1983 00:00:00'))
								),						
						array(
								'name' => 'Daniel Perez',
								'phone' => '3134250285',
								'email' => 'dperez@hotmail.com',
								'added_on' => new MongoDate(strtotime('20-09-1983 00:00:00'))
								)														
						);
		
		deliver_response(200, "Contacts sent", $contacts);				
	}
	
	function verifyCredentials(){
    	if(!empty($_GET['username']) && !empty($_GET['password']) ){
    		$name = $_GET['username'];
			$password = $_GET['password'];
		
			$data['username'] = $name;
			$data['validation'] = true;
		
			deliver_response(200, "User found", $data);
    	}	
		else{
			deliver_response(400, "Invalid Request", NULL);
		}		
	}
	
	function deliver_response($status, $status_message, $data){
			
		header("HTTP/1.1 $status $status_message");
		
		$response['status'] = $status;
		$response['status_message'] = $status_message;
		$response['data']= $data;
		
		$json_response = json_encode($response);
		echo $json_response;
	}	
?>