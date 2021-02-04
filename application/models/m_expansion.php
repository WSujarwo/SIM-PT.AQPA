<?php 
class M_expansion extends CI_Model{

	function get_all_expansion(){
		$hsl=$this->db->query("SELECT * FROM tbl_expansion");
		return $hsl;
	}

	function simpan_expansion($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_expansion (expansion_nama,expansion_class,expansion_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_expansion_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_expansion (expansion_nama,expansion_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_expansion($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_expansion SET expansion_nama='$nama',expansion_class='$class',expansion_photo='$photo' WHERE expansion_id='$kode'");
		return $hsl;
	}
	function update_expansion_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_expansion SET expansion_nama='$nama',expansion_class='$class' WHERE expansion_id='$kode'");
		return $hsl;
	}
	function hapus_expansion($kode){
		$hsl=$this->db->query("DELETE FROM tbl_expansion WHERE expansion_id='$kode'");
		return $hsl;
	}

	//front-end
	function expansion(){
		$hsl=$this->db->query("SELECT * FROM tbl_expansion");
		return $hsl;
	}
	function expansion_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_expansion limit $offset,$limit");
		return $hsl;
	}

}