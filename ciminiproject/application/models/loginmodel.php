<?php
class Loginmodel extends CI_model{
	
	public function login_valid($username, $password){
		
		//fetch data from database
		$q = $this->db->where(['uname'=>$username, 'pword'=>$password])
						->get('users');
		if($q->num_rows()){ //return number for rows
			
			return $q->row()->id; //returning row id
			
		}else{
			return FALSE; 
		}
		
	}
}