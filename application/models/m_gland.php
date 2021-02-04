<?php 
class M_gland extends CI_Model{

	function get_all_gland(){
		$hsl=$this->db->query("SELECT * FROM tbl_glandpacing");
		return $hsl;
	}

	function simpan_gland($jenis,$desc,$temp,$ph,$speed,$press,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_glandpacing (gland_jenis,gland_desc,gland_temp,gland_ph,gland_speed,gland_press,gland_gambar) VALUES ('$jenis','$desc','$temp','$ph','$speed','$press','$photo')");
		return $hsl;
	}
	function simpan_gland_tanpa_img($jenis,$desc,$temp,$ph,$speed,$press){
		$hsl=$this->db->query("INSERT INTO tbl_glandpacing (gland_jenis,gland_desc,gland_temp,gland_ph,gland_speed,gland_press) VALUES ('$jenis','$desc','$temp','$ph','$speed','$press')");
		return $hsl;
	}

	function update_gland($kode,$jenis,$desc,$temp,$ph,$speed,$press,$photo){
		$hsl=$this->db->query("UPDATE tbl_glandpacing SET gland_jenis='$jenis',gland_desc='$desc',gland_temp='$temp',gland_ph='$ph',gland_speed='$speed',gland_press='$press',gland_gambar='$photo' WHERE gland_id='$kode'");
		return $hsl;
	}
	function update_gland_tanpa_img($kode,$jenis,$desc,$temp,$ph,$speed,$press){
		$hsl=$this->db->query("UPDATE tbl_glandpacing SET gland_jenis='$jenis',gland_desc='$desc',gland_temp='$temp',gland_ph='$ph',gland_speed='$speed',gland_press='$press' WHERE gland_id='$kode'");
		return $hsl;
	}
	function hapus_gland($kode){
		$hsl=$this->db->query("DELETE FROM tbl_glandpacing WHERE gland_id='$kode'");
		return $hsl;
	}

	//front-end
	function gland(){
		$hsl=$this->db->query("SELECT * FROM tbl_glandpacing");
		return $hsl;
	}
	function gland_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_glandpacing limit $offset,$limit");
		return $hsl;
	}
	function get_gland_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_glandpacing where gland_id='$kode'");
		return $hsl;
	}
}