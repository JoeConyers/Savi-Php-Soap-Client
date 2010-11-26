<?php

debug_print_backtrace();
$savi_username = "admin";
$savi_password = "S@v!@pi187";


$savi_client = new SoapClient("http://@66.77.198.194/sc-ws/services/ReportService?wsdl",      array('login'  => "admin", 'password' => "S@v!@pi187"));
 

var_dump($savi_client);

?>