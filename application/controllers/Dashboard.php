<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_album');
		
		// $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('profil')=='1' || $this->session->userdata('profil')=='2');
		// if(!$logged_in){
		// 	redirect('Login');
		// }
	}

	public function index()
	{


		$this->load->view('V_dashboard_user');
		$this->load->view('V_footer_dashboard');

	}

	public function dashboard_album ()
	{

		
		$this->load->view('V_dashboard_album');
		$this->load->view('V_footer_dashboard');

	}
	public function dashboard_photos()
	{

		
		$this->load->view('V_dashboard_photos');
		$this->load->view('V_footer_dashboard');

	}

	public function user_profile()
	{

		
		$this->load->view('V_dashboard_user_profile');
		$this->load->view('V_footer_dashboard');

	}

}

?>