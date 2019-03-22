<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
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

}

?>