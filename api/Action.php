<?php

if(isset($_GET["action"]))
{
	if($_GET["action"] == 'insert')
	{
		$form_data = array(
			'MobileNumber'	=>	$_POST['MobileNumber'],
			'FirstName'		=>	$_POST['FirstName'],
			'LastName'		=>	$_POST['LastName'],
			'MonthBirth'	=>	$_POST['MonthBirth'],
			'DateBirth'		=>	$_POST['DateBirth'],
			'YearBirth'		=>	$_POST['YearBirth'],
			'Gender'		=>	isset($_POST['Gender']) ? $_POST['Gender'] : '',
			'Email'			=>	$_POST['Email']
		);
		$api_url = "http://localhost/mitrais/api/ApiTest.php?action=insert";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		curl_close($client);
		$result = json_decode($response, true);
		foreach($result as $keys => $values)
		{
			if($result[$keys]['success'] == '1')
			{
				echo 'insert';
			}
			else
			{
				echo 'error';
			}
		}
	}
	if($_GET["action"] == 'login')
	{
		$id = $_POST["FirstName"];
		$email = $_POST["Email"];
		$api_url = "http://localhost/mitrais/api/ApiTest.php?action=login&id=".$id."&email=".$email."";
		$client = curl_init($api_url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($client);
		echo $response;
	}
}
else
{
	echo $_GET["action"] ;
}


?>