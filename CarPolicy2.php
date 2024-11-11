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

    public function getDiscount(){
        $yearsNoClaims = $this->getTotalYearsNoClaims();
        if ($yearsNoClaims > 5) {
            return 0.15;}

            elseif ($yearsNoClaims >=3){
                return 0.10;}
            
            else {
                return 0.0;
            }

        }

        public function getDiscountedPremium(){
            $discount = $this->getDiscount();
            return $this-> yearlyPremium * (1- $discount);
        }
    
    
    }
?>



