<?php 
class M_swg extends CI_Model{

	function get_all_swg(){
		$hsl=$this->db->query("SELECT * FROM tbl_swg");
		return $hsl;
	}

	function simpan_swg($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_swg (swg_nama,swg_class,swg_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_swg_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_swg (swg_nama,swg_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_swg($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_swg SET swg_nama='$nama',swg_class='$class',swg_photo='$photo' WHERE swg_id='$kode'");
		return $hsl;
	}
	function update_swg_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_swg SET swg_nama='$nama',swg_class='$class' WHERE swg_id='$kode'");
		return $hsl;
	}
	function hapus_swg($kode){
		$hsl=$this->db->query("DELETE FROM tbl_swg WHERE swg_id='$kode'");
		return $hsl;
	}

	//front-end
	function swg(){
		$hsl=$this->db->query("SELECT * FROM tbl_swg");
		return $hsl;
	}
	function swg_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_swg limit $offset,$limit");
		return $hsl;
	}

}