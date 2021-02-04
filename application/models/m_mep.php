<?php 
class M_mep extends CI_Model{

	function get_all_mep(){
		$hsl=$this->db->query("SELECT * FROM tbl_mep");
		return $hsl;
	}

	function simpan_mep($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_mep (mep_nama,mep_class,mep_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_mep_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_mep (mep_nama,mep_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_mep($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_mep SET mep_nama='$nama',mep_class='$class',mep_photo='$photo' WHERE mep_id='$kode'");
		return $hsl;
	}
	function update_mep_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_mep SET mep_nama='$nama',mep_class='$class' WHERE mep_id='$kode'");
		return $hsl;
	}
	function hapus_mep($kode){
		$hsl=$this->db->query("DELETE FROM tbl_mep WHERE mep_id='$kode'");
		return $hsl;
	}

	//front-end
	function mep(){
		$hsl=$this->db->query("SELECT * FROM tbl_mep");
		return $hsl;
	}
	function mep_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_mep limit $offset,$limit");
		return $hsl;
	}

}