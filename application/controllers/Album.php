<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Album extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('session','form_validation',));
		$this->load->helper(array('url','form','security'));
		$this->load->model('M_album');

	}

	public function index()
	{
        redirect(base_url());
	}

	function detail()
	{
        $nama=$this->uri->segment('3');
        $nam=str_replace('-', ' ', strtolower($nama));
        $data['album']=$this->M_album->per_id($nam);
        $data['show']=$this->M_album->show_foto($nam);
		$this->load->view('V_album_detail',$data);
		$this->load->view('V_footer');
        //print_r($jud);
	}

	public function add_photo(){
		print_r($_POST);
        
        $deskripsi = $this->input->post('deskripsi');
        $album= $this->input->post('album');
        $owner= $this->input->post('owner');
        if(!empty($_FILES['gambar']['name']))
        {       
            $config['upload_path'] =  realpath('./assets/uploads/');
            $config['allowed_types'] = 'jpeg|jpg|png|JPEG';
            $config['max_size'] = '512000';
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            print_r($config);
            print_r($this->upload->do_upload('gambar'));
            print_r($this->upload->display_errors());
        }
        if(!$this->upload->do_upload('gambar'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('hasil', 'Failed To Upload');
            //print('huhu');
            echo "error uploadsss";
        }else{
            $file = $this->upload->data();
            $data = array(
                
                'gambar'         => $file['file_name'],
                'deskripsi'     => $deskripsi,
                'album'           => $album,
                'owner'           => $owner
            );
            
                $insert = $this->M_album->add_foto($data);
                if ($insert != '') {
                    $this->session->set_flashdata('hasil', 'Data successfully add');
                    redirect(base_url('album/detail/').str_replace(' ', '-', strtolower($album)));
                } else {
                    $this->session->set_flashdata('hasil', 'Failed to add data');
                    echo "gagal input db";
                }
            

        }
	}

}

?>