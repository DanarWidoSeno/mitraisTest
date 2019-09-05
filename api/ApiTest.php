<?php

include('Api.php');

$api_object = new API();
if($_GET["action"] == 'insert')
{
	$data = $api_object->insert();
}
if($_GET["action"] == 'login')
{
	$data = $api_object->login($_GET["id"],$_GET["email"]);
}
echo json_encode($data);

?>