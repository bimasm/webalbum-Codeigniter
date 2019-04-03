<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		//$this->load->view('V_header');
		$this->load->view('V_register');
		///$this->load->view('V_footer');
	}

	public function do_register()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$no_telp=$this->input->post('no_telp');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$cek=$this->M_user->cek_register($username)->num_rows();
		if ($cek>0) {
			echo "username tidak bisa dipakai!";
			redirect(base_url("register"));
		}else{
			$this->M_user->register($nama,$email,$no_telp,$username,$password);
			$this->M_user->notif($username);
			redirect(base_url("login"));
		}
	}

}

?>