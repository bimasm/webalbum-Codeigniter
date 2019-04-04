<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_album');
		$this->load->model('M_user');

		if ($this->session->userdata('statses') != "login") {
		redirect(base_url());
	}
	}

	public function index()
	{


		$this->load->view('V_dashboard_user');
		$this->load->view('V_footer_dashboard');

	}

	public function album ()
	{

		
		$this->load->view('V_dashboard_album');
		$this->load->view('V_footer_dashboard');

	}
	public function photos()
	{

		
		$this->load->view('V_dashboard_photos');
		$this->load->view('V_footer_dashboard');

	}

	public function user_profile($username)
	{
		$username=$this->uri->segment('3');
		$data['user']=$this->M_user->edit($username);
		
		$this->load->view('V_dashboard_user_profile',$data);
		$this->load->view('V_footer_dashboard');

	}
	function update_user($username){
		$this->M_user->do_edit($username);
		redirect(base_url('Dashboard/user_profile/').$this->session->userdata('username'));
	}

}

?>