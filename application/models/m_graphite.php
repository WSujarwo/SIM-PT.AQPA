<?php 
class M_graphite extends CI_Model{

	function get_all_graphite(){
		$hsl=$this->db->query("SELECT * FROM tbl_graphite");
		return $hsl;
	}

	function simpan_graphite($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_graphite (graphite_nama,graphite_class,graphite_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_graphite_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_graphite (graphite_nama,graphite_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_graphite($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_graphite SET graphite_nama='$nama',graphite_class='$class',graphite_photo='$photo' WHERE graphite_id='$kode'");
		return $hsl;
	}
	function update_graphite_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_graphite SET graphite_nama='$nama',graphite_class='$class' WHERE graphite_id='$kode'");
		return $hsl;
	}
	function hapus_graphite($kode){
		$hsl=$this->db->query("DELETE FROM tbl_graphite WHERE graphite_id='$kode'");
		return $hsl;
	}

	//front-end
	function graphite(){
		$hsl=$this->db->query("SELECT * FROM tbl_graphite");
		return $hsl;
	}
	function graphite_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_graphite limit $offset,$limit");
		return $hsl;
	}

}