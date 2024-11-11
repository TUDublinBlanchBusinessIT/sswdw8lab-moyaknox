<?php 
class CarPolicy{
    private $policyNumber="";
    private $yearlyPremium="";
    private $dateOfLastClaim="";
    private $policyHolderName="";

    public function __construct($policyNumber, $yearlyPremium, $policyHolderName){
        $this->policyNumber = $policyNumber;
        $this->yearlyPremium = $yearlyPremium;
        $this->policyHolderName = $policyHolderName;
    }

    public function setDateOfLastClaim($dateOfLastClaim){
        $this->dateOfLastClaim = $dateOfLastClaim;
    }

    public function getTotalYearsNoClaims(){

        $currentDate = new DateTime();
        $lastDate = new DateTime($this->dateOfLastClaim);
        $interval = $currentDate->diff($lastDate);
        return $interval->format("%y");
    }

    public function __toString() {
        return "PN: " . $this->policyNumber . " " . $this->policyHolderName;
    }
}
?>



