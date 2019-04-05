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

	}

	public function index()
	{

		if ($this->session->userdata('statses') == "admin") {
		redirect(base_url('admin/dashboard'));
	}else{
		$this->load->view('V_dashboard_admin_login');
	}
		
		

	}
  
	public function dashboard ()
	{
		if ($this->session->userdata('statses') == "admin") {
		
		$data['notification'] = $this->M_notif->show();
		$data['angka'] = $this->M_notif->jumlah();
		$data['jmluser'] = $this->M_notif->jmluser();
		$data['jmlalbum'] = $this->M_notif->jmlalbum();
		$data['jmlphoto'] = $this->M_notif->jmlphoto();
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
		$data['notification'] = $this->M_notif->show();
		$data['angka'] = $this->M_notif->jumlah();
		
		$data['foto'] = $this->M_album->admin_foto();
		$this->load->view('V_dashboard_photos_admin',$data);
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
		$data['notification'] = $this->M_notif->show();
		$data['angka'] = $this->M_notif->jumlah();
	
		$data['users'] = $this->M_user->user();

		$this->load->view('V_dashboard_user_admin',$data);
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
	public function deleteimg($gambar){
    $data = array('gambar' => $gambar );
    $this->M_album->delete($data,'gambar');
    redirect(base_url('admin/photos'));
    }
    public function deletealbum($album_id){
  
    $data = array('album_id' => $album_id );
    $this->M_album->delete_album_by_user($data,'album');
    redirect(base_url('admin/album'));
    }
    public function delete($username){
    $data = array('username' => $username );
    $this->M_user->deletenotif($data,'notification');
    $this->M_user->deleteuser($data,'user');
    redirect(base_url('admin/users'));
    }
    

    function update_user(){
    	$username=$this->input->post('username');
    	$nama=$this->input->post('nama');
    	$email=$this->input->post('email');
    	$no_telp=$this->input->post('no_telp');
    	$password=$this->input->post('password');

    	$this->M_user->edit_user_by_admin($nama,$email,$no_telp,$password,$username);
    	redirect(base_url('admin/users'));
    }
    function activate($username){
    	$data = array('username' => $username );
    	$this->M_user->deletenotif($data,'notification');
    	$this->M_user->activate($username);
    	redirect(base_url('admin/users'));
    }
    function disable($username){
    	
    	$this->M_user->disable($username);
    	redirect(base_url('admin/users'));
    }
    
	public function logout(){
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}

}

?>