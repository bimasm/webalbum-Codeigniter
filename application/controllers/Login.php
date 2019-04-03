<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_user');
		// $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('profil')=='1' || $this->session->userdata('profil')=='2');
		// if(!$logged_in){
		// 	redirect('Login');
		// }
	}

	public function index()
	{
	if ($this->session->userdata('statses') == "login") {
		redirect(base_url());
	}else{
		$this->load->view('V_login');
	}
	
	}

	public function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$cek=$this->M_user->cek_login($username,$password)->num_rows();
		$nama=$this->M_user->datauser($username,$password);
		$status=$this->M_user->statususer($username,$password);
		if ($cek>0) {
			
			$data_session = array(
				'username' => $username,
				'password' => $password,
				'nama' => $nama,
				'status' => $status,
				'statses' => "login" 
				);
			$this->session->set_userdata($data_session);
			
			redirect(base_url());

		}else{
			
			redirect(base_url('login'));
		}
	}

	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

?>