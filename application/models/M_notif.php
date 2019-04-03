<?php 
 
class M_notif extends CI_Model{

	function show(){
		return $this->db->get('notification')->result();
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
		return $this->db->query("SELECT COUNT(`album_id`) AS total FROM album")->result();
	}
}