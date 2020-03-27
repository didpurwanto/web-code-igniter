<?php
class Momodel extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	
	
	function insert_consultation($company_cname, $company_ename, $ceo, $uniform_no, $address, $fax, $website){
		$sql = "insert into consultation(company_cname, company_ename, ceo, uniform_no, address, fax, website) values ('".$company_cname."', '".$company_ename."', '".$ceo."', '".$uniform_no."', '".$address."', '".$fax."', '".$website."')";
		$query=$this->db->query($sql);
	}
	
	function insert_tutorial($company_cname, $company_ename, $uniform_no, $address, $telpon, $participant1, $gender1, $participant2, $gender2, $email, $plan, $enrollment, $dining){
		$sql = "insert into tutorial(company_cname, company_ename, uniform_no, address, telpon, participant1, gender1, participant2, gender2, email, plan, enrollment, dining) values ('".$company_cname."', '".$company_ename."', '".$uniform_no."', '".$address."', '".$telpon."', '".$participant1."', '".$gender1."','".$participant2."', '".$gender2."', '".$email."', '".$plan."', '".$enrollment."', '".$dining."')";
		$query=$this->db->query($sql);
	}
	
	
	
	
	
}
?>