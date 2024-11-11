<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy.php");

$myCarpolicy = new CarPolicy("XM123456", 450, "Moya Knox");

$myCarpolicy->setDateOfLastClaim("2015-10-10");
echo "The policy " . $myCarpolicy;
echo " has " . $myCarpolicy->getTotalYearsNoClaims();
echo " years no claims.";


?>