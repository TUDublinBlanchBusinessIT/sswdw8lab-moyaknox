<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy2.php");
$initialPremium = 600;
$myCarpolicy = new CarPolicy("XM123456", $initialPremium, "Moya Knox");

$myCarpolicy->setDateOfLastClaim("2015-10-10");

echo " Years no claims:  " . $myCarpolicy->getTotalYearsNoClaims();

echo " Your initial premium is $initialPremium"; 

echo " Your discounted premium is " . $myCarpolicy->getDiscountedPremium(); 

?>