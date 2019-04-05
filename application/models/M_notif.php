<?php 
 
class M_notif extends CI_Model{

	function show(){
		return $this->db->query("SELECT * FROM `notification` ORDER BY `id_notif` desc")->result();
	}
	function jumlah(){
		return $this->db->query("SELECT COUNT(  `id_notif` ) AS total FROM notification")->result();
	}
	function jmluser(){
		return $this->db->query("SELECT COUNT(`status`) AS total FROM user WHERE `status`='is_active'")->result();
	}
	function jmlalbum(){
		return $this->db->query("SELECT COUNT(`album_id`) AS total FROM album")->result();
	}
	function jmlphoto(){
		return $this->db->query("SELECT COUNT(`id_gambar`) AS total FROM gambar")->result();
	}
	function jmlalbumuser($user){
		return $this->db->query("SELECT COUNT(`album_id`) AS total from album WHERE `owner`='$user'")->result();
	}
	function jmlphotouser($user){
		return $this->db->query("SELECT COUNT(`id_gambar`) AS total from gambar WHERE `owner`='$user'")->result();
	}
}