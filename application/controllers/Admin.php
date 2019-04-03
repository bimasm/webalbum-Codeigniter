<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_notif');
		$this->load->model('M_user');
		$this->load->model('M_album');


		
		// $logged_in = $this->session->userdata('status')=='login' && ($this->session->userdata('profil')=='1' || $this->session->userdata('profil')=='2');
		// if(!$logged_in){
		// 	redirect('Login');
		// }
	}

	public function index()
	{

		
		$this->load->view('V_dashboard_admin_login');
		

	}
 
	public function dashboard ()
	{
		if ($this->session->userdata('statses') == "admin") {
		
		$data['notification'] = $this->M_notif->show();
		$data['angka'] = $this->M_notif->jumlah();
		$data['jmluser'] = $this->M_notif->jmluser();
		$data['jmlalbum'] = $this->M_notif->jmlalbum();
		// print_r($data);
		$this->load->view('V_dashboard_admin',$data);
		$this->load->view('V_footer_dashboard');
		}else{
		redirect(base_url("admin"));
		}
	}

	public function photos()
	{

		if ($this->session->userdata('statses') == "admin") {
		$this->load->view('V_dashboard_photos_admin');
		$this->load->view('V_footer_dashboard');
		}else{
		redirect(base_url("admin"));
		}
	}

	public function album()
	{

		if ($this->session->userdata('statses') == "admin") {
		$data['notification'] = $this->M_notif->show();
		$data['angka'] = $this->M_notif->jumlah();
		$data['jmluser'] = $this->M_notif->jmluser();
		$data['jmlalbum'] = $this->M_notif->jmlalbum();
		$data['album'] = $this->M_album->show_album();
		$this->load->view('V_dashboard_album_admin',$data);
		$this->load->view('V_footer_dashboard');
		}else{
		redirect(base_url("admin"));
		}
	}
	public function users()
	{

		if ($this->session->userdata('statses') == "admin") {
		$this->load->view('V_dashboard_user_admin');
		$this->load->view('V_footer_dashboard');
		}else{
		redirect(base_url("admin"));
		}
	}
	public function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$cek=$this->M_user->cek_admin($username,$password)->num_rows();
		
		
		if ($cek>0) {
			
			$data_session = array(
				'username' => $username,
				'password' => $password,
				'nama' => $username,
				'statses' => "admin" 
				);
			$this->session->set_userdata($data_session);
			
			redirect(base_url('admin/dashboard'));

		}else{
			
			redirect(base_url('admin'));
		}
	}
	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

}

?>