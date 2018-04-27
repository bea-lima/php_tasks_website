<?php
	$request_method=$_SERVER["REQUEST_METHOD"];
	switch($request_method)
	{
		case 'GET':
			$task_id = $_GET['task_id'];
			if($task_id!=NULL){
				$url = 'http://localhost/php_rest_api/tasks/$task_id';
			}else{
				$url = 'http://localhost/php_rest_api/tasks';
			}
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_HTTPGET, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response_json = curl_exec($ch);
			curl_close($ch);
			$response=json_decode($response_json, true);
			$tasks = $response;
			break;
		case 'POST':
			$name = $_POST['name'];
			echo $name;
			$data=array(
					'name' => $name
			);
			$url = 'http://localhost/php_rest_api/tasks';
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response_json = curl_exec($ch);
			curl_close($ch);
			$response=json_decode($response_json, true);
			header('Location: index.php');
			break;
		case 'PUT':

			break;
		case 'DELETE':

			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}