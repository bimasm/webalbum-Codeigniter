<?php 
  
class M_album extends CI_Model{

	function add_album($nama_album,$keterangan,$owner){
		return $this->db->query("INSERT INTO `album`(`album_id`, `nama_album`, `keterangan`, `owner`) VALUES ('','$nama_album','$keterangan','$owner')");
	}


	function show_album(){
		return $this->db->get('album')->result();
	}


	function per_id($nama)
  	{
    $this->db->where('nama_album',$nama);
    $query=$this->db->get('album');
    return $query->result();
  	}


  	public function add_foto($data)
	{
    $this->db->insert('gambar',$data);
    $insert_id = $this->db->insert_id();
    return $insert_id;
	}

	function show_foto($nama){
	$this->db->where('album',$nama);
    $query=$this->db->get('gambar');
    return $query->result();
	}
}