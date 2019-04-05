<?php 
 
class M_user extends CI_Model{	

	function cek_login($username,$password){		
		return $this->db->query("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password' LIMIT 1");
	}
	function cek_register($username){		
		return $this->db->query("SELECT * FROM `user` WHERE `username`='$username' LIMIT 1");
	}
	function datauser($username,$password){
		return $this->db->query("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'")->row()->nama;
	}
	function statususer($username,$password){
		return $this->db->query("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'")->row()->status;
	}
	function register($nama,$email,$no_telp,$username,$password){
		return $this->db->query("INSERT INTO `user`(`user_id`, `nama`, `email`, `no_telp`, `username`, `password`, `status`) VALUES ('', '$nama', '$email', '$no_telp', '$username', '$password', 'not_active')");
	}
	function notif($username){
		return $this->db->query("INSERT INTO `notification`(`id_notif`, `keterangan`, `username`) VALUES ('','new user','$username')");
	}
		function cek_admin($username,$password){		
		return $this->db->query("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password' LIMIT 1");
	}
	function user(){
		return $this->db->get('user')->result();
	}
	function edit($username){
		$this->db->where('username',$username);
		return $this->db->get('user')->result();
	}
	function do_edit($username){
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$no_telp=$this->input->post('no_telp');
		$password=$this->input->post('password');
		
		$this->db->where('username',$username);
		$this->db->query("UPDATE `user` SET `nama`='$nama',`email`='$email',`no_telp`='$no_telp',`password`='$password' WHERE `username`='$username'");
	}
	function deleteuser($username){
    	$this->db->where($username);
    	$this->db->delete('user');
    }
    function deletenotif($username){
    	$this->db->where($username);
    	$this->db->delete('notification');
    }
    function edit_user_by_admin($nama,$email,$no_telp,$password,$username){
    	return $this->db->query("UPDATE `user` SET `nama`='$nama',`email`='$email',`no_telp`='$no_telp',`password`='$password' WHERE `username`='$username'");
    }
    function activate($username){
    	return $this->db->query("UPDATE `user` SET `status`='is_active' WHERE `username`='$username'");
    }
    function disable($username){
    	return $this->db->query("UPDATE `user` SET `status`='not_active' WHERE `username`='$username'");
    }
}	
