
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	public function __construct()
		{
			parent::__construct();
			
		}	
	public function get_user(){
		$this->db->select('*'); 
		$this->db->from("member");
		$this->db->where("Status",1);
		$query=$this->db->get();
		
		if($query){
			$result = $query->result_array();
		}else{
			return false;
		}

		return $result;
	}

	public function get_user_by_id($user_id){
		$this->db->select('*'); 
		$this->db->from("member");
		$this->db->where("Status",1);
		$this->db->where("user_id",$user_id);
		$query=$this->db->get();
		
		if($query){
			$result = $query->result_array();
		}else{
			return false;
		}

		return $result;
	}

	public function add_user($array_user){
		
		$data = array(
			"name_surname" => $array_user['full_name'],
			"user" => $array_user['user_name'],
			"password" => $array_user['password'],
			"Email" => $array_user['email'],
			"phone" =>  $array_user['phone'],
			"Status"=> 1
		);
	
		if($this->db->insert('member',$data)){
			return true;
		}else{
			return false;
		}
		
	}

	public function delete_user($user_id){
		
		$data = array(
	        'Status' => 0,
	        
		);
		$this->db->where('user_id', $user_id);
		if($this->db->update('member', $data)){
			return true;
		}else{
			return false;
		}

	}

	public function edit_user_by_id($user_id,$data_user){
		// var_dump($data_user);
		// echo $user_id;
		$data = array(
	        'name_surname' => $data_user['full_name'],
	        'user' => $data_user['user_name'],
	        'password' => $data_user['password'],
	        'Email'=>$data_user['email'],
	        'phone'=>$data_user['phone']
		);
		$this->db->where('user_id', $user_id);
		if($this->db->update('member', $data)){
			return true;
		}else{
			return false;
		}


	}

}

?>