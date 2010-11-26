<?php

$savi_username = "admin";
$savi_password = "S@v!@pi187";

$options=  array('login'  => $savi_username, 'password' => $savi_password);

$savi_client = new SoapClient("http://66.77.198.194/sc-ws/services/ReportService?wsdl",  $options);
 

//var_dump($savi_client->__getFunctions());
var_dump($savi_client->__soapCall("GetSystimestampFromDual", array("param1" => $value1)));


?>