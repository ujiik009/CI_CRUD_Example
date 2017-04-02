<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->view('navbar');
		$this->load->model('Model_user');

	}

	public function index(){
	
		$data['res'] = $this->Model_user->get_user();
		$this->load->view('view_user',$data);
		

	}
	public function add_user_form(){
		$this->load->view('add_view');
	}

	public function add_user(){
		$arr_data['full_name'] = $this->input->post("name");
		$arr_data['user_name'] = $this->input->post("user_name");
		$arr_data['password'] = $this->input->post("password");
		$arr_data['email'] = $this->input->post("email");
		$arr_data['phone'] = $this->input->post("phone");
		$res = $this->Model_user->add_user($arr_data);

		if($res){
			redirect(base_url());
		}else{
			echo "error";
		}

	}
	public function delete_user($user_id){
		
		$res =  $this->Model_user->delete_user($user_id);
		if($res){
			redirect(base_url());
		}else{
			echo "error";
		}
	}
	public function edit_user_form($user_id){

		$user_data['data'] = $this->Model_user->get_user_by_id($user_id);
		$this->load->view('edit_user_view',$user_data);
	}
	public function edit_user($user_id){
		$arr_data['full_name'] = $this->input->post("name");
		$arr_data['user_name'] = $this->input->post("user_name");
		$arr_data['password'] = $this->input->post("password");
		$arr_data['email'] = $this->input->post("email");
		$arr_data['phone'] = $this->input->post("phone");
		$res = $this->Model_user->edit_user_by_id($user_id,$arr_data);
		
		if($res){
			redirect(base_url());
		}else{
			echo "error";
		}

	}

}

?>


