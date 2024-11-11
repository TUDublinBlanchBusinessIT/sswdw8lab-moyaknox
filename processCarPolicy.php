<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy2.php");

$policyNumber = $_POST['policyNumber'];
$yearlyPremium = $_POST['yearlyPremium'];
$dateOfLastClaim = $_POST['dateOfLastClaim'];
$policyHolderName = "User";

$carPolicy = new CarPolicy($policyNumber, $yearlyPremium, $policyHolderName);

$carPolicy->setDateOfLastClaim($dateOfLastClaim);

$initialPremium = $yearlyPremium;
$discountedPremium = $carPolicy->getDiscountedPremium();

echo "Initial Premium: $" . $initialPremium; 
echo "Discounted Premium: $" . $discountedPremium; 

?>

