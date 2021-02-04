<?php 
class M_thermal extends CI_Model{

	function get_all_thermal(){
		$hsl=$this->db->query("SELECT * FROM tbl_thermal");
		return $hsl;
	}

	function simpan_thermal($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_thermal (thermal_nama,thermal_class,thermal_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_thermal_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_thermal (thermal_nama,thermal_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_thermal($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_thermal SET thermal_nama='$nama',thermal_class='$class',thermal_photo='$photo' WHERE thermal_id='$kode'");
		return $hsl;
	}
	function update_thermal_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_thermal SET thermal_nama='$nama',thermal_class='$class' WHERE thermal_id='$kode'");
		return $hsl;
	}
	function hapus_thermal($kode){
		$hsl=$this->db->query("DELETE FROM tbl_thermal WHERE thermal_id='$kode'");
		return $hsl;
	}

	//front-end
	function thermal(){
		$hsl=$this->db->query("SELECT * FROM tbl_thermal");
		return $hsl;
	}
	function thermal_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_thermal limit $offset,$limit");
		return $hsl;
	}

}