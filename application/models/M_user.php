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
}	
