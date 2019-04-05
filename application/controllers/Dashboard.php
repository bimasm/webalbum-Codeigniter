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
		$this->load->model('M_notif');

		if ($this->session->userdata('statses') != "login") {
		redirect(base_url());
	}
	}

	public function index()
	{
		$user=$this->session->userdata('username');
		$data['jmlalbumuser'] = $this->M_notif->jmlalbumuser($user);
		$data['jmlphotouser'] = $this->M_notif->jmlphotouser($user);
		$this->load->view('V_dashboard_user',$data);
		$this->load->view('V_footer_dashboard');

	}

	public function album ()
	{


		$user=$this->session->userdata('username');
		$data['album']=$this->M_album->show_album_by_user($user);
		$this->load->view('V_dashboard_album',$data);
		$this->load->view('V_footer_dashboard');

	}
	public function photos()
	{

		$user=$this->session->userdata('username');
		$data['foto']=$this->M_album->show_foto_by_user($user);
		$this->load->view('V_dashboard_photos',$data);
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
	public function deleteimg($gambar){
    $data = array('gambar' => $gambar );
    $this->M_album->delete_by_user($data,'gambar');
    redirect(base_url('Dashboard/photos'));
    }
    public function deletealbum($album_id){
  
    $data = array('album_id' => $album_id );
    $this->M_album->delete_album_by_user($data,'album');
    redirect(base_url('Dashboard/album'));
    }

    function editalbum(){
    	$nama_album=$this->input->post('nama_album');
    	$keterangan=$this->input->post('keterangan');
    	$this->M_album->editalbum($keterangan,$nama_album);
    	redirect(base_url('Dashboard/album'));
    }
    function editfoto(){
    	$gambar=$this->input->post('gambar');
    	$deskripsi=$this->input->post('deskripsi');
    	$this->M_album->editfoto($deskripsi,$gambar);
    	redirect(base_url('Dashboard/photos'));
    }

}

?>