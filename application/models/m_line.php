<?php 
class M_line extends CI_Model{

	function get_all_line(){
		$hsl=$this->db->query("SELECT * FROM tbl_line");
		return $hsl;
	}

	function simpan_line($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_line (line_nama,line_class,line_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_line_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_line (line_nama,line_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_line($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_line SET line_nama='$nama',line_class='$class',line_photo='$photo' WHERE line_id='$kode'");
		return $hsl;
	}
	function update_line_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_line SET line_nama='$nama',line_class='$class' WHERE line_id='$kode'");
		return $hsl;
	}
	function hapus_line($kode){
		$hsl=$this->db->query("DELETE FROM tbl_line WHERE line_id='$kode'");
		return $hsl;
	}

	//front-end
	function line(){
		$hsl=$this->db->query("SELECT * FROM tbl_line");
		return $hsl;
	}
	function line_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_line limit $offset,$limit");
		return $hsl;
	}

}