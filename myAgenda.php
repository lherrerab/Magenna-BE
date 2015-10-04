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
		
		if($service == "newContact"){				
			createContact($_GET['name'], $_GET['phone'], $_GET['email']);
		}
	}
	
	function getAllContacts(){
		$contacts = array(
						array(
								'name' => 'Jaime Blanco',
								'phone' => '3157252650',
								'email' => 'jblanco@hotmail.com',
								'added_on' => '30-09-1983'
								),						
						array(
								'name' => 'Camila Pata',
								'phone' => '3017202510',
								'email' => 'cpata@hotmail.com',
								'added_on' => '28-10-1983'
								),						
						array(
								'name' => 'Daniel Perez',
								'phone' => '3134250285',
								'email' => 'dperez@hotmail.com',
								'added_on' => '20-09-1983'
								)														
						);
		
		deliver_response(200, "Contacts sent", $contacts);				
	}
	
	function createContact($name, $phone, $email){
		$newContact = array(
						'name' => $name,
						'phone' => $phone,
						'email' => $email,
						'added_on' => '21-10-2015'					
						);
	
		deliver_response(200, "Contacts sent", $newContact);				
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
