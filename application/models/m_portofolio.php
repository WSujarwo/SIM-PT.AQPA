<?php 
class M_portofolio extends CI_Model{

	function get_all_portofolio(){
		$hsl=$this->db->query("SELECT * FROM tbl_portofolio");
		return $hsl;
	}

	function simpan_portofolio($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_portofolio (portofolio_nama,portofolio_class,portofolio_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_portofolio_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_portofolio (portofolio_nama,portofolio_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_portofolio($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_portofolio SET portofolio_nama='$nama',portofolio_class='$class',portofolio_photo='$photo' WHERE portofolio_id='$kode'");
		return $hsl;
	}
	function update_portofolio_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_portofolio SET portofolio_nama='$nama',portofolio_class='$class' WHERE portofolio_id='$kode'");
		return $hsl;
	}
	function hapus_portofolio($kode){
		$hsl=$this->db->query("DELETE FROM tbl_portofolio WHERE portofolio_id='$kode'");
		return $hsl;
	}

	//front-end
	function portofolio(){
		$hsl=$this->db->query("SELECT * FROM tbl_portofolio");
		return $hsl;
	}
	function portofolio_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_portofolio limit $offset,$limit");
		return $hsl;
	}

}