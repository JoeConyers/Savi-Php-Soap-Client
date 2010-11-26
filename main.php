<?php

debug_print_backtrace();
$savi_username = "admin";
$savi_password = "S@v!@pi187";


$savi_client = new SoapClient("http://66.77.198.194/sc-ws/services/ReportService?wsdl",      array('login'  => $savi_username, 'password' => $savi_password));
 

var_dump($savi_client->__getFunctions());


?>