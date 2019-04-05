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
	function admin_foto(){
		return $this->db->get('gambar')->result();
	}
	function delete($gambar){
    	$this->db->where($gambar);
    	$this->db->delete('gambar');
    }
    function show_album_by_user($user){
    	return $this->db->query("SELECT * FROM `album` WHERE `owner`='$user'")->result();
    }
    function show_foto_by_user($user){
    	
    	return $this->db->query("SELECT * FROM `gambar` WHERE `owner` ='$user'")->result();

    }
    function delete_by_user($gambar){
    	$this->db->where($gambar);
    	$this->db->delete('gambar');
    }
    function delete_album_by_user($album_id){
    	$this->db->where($album_id);
    	$this->db->delete('album');
    }
    function editalbum($keterangan,$nama_album){
        return $this->db->query("UPDATE `album` SET `keterangan`='$keterangan' WHERE `nama_album`='$nama_album'");
    }
    function editfoto($deskripsi,$gambar){
        return $this->db->query("UPDATE `gambar` SET `deskripsi`='$deskripsi' WHERE `gambar`='$gambar'");
    }
}