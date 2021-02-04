<?php 
class M_customer extends CI_Model{

	function get_all_customer(){
		$hsl=$this->db->query("SELECT * FROM tbl_customer");
		return $hsl;
	}

	function simpan_customer($nama,$link,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_customer (customer_nama,customer_link,customer_photo) VALUES ('$nama','$link','$photo')");
		return $hsl;
	}
	function simpan_customer_tanpa_img($nama,$link){
		$hsl=$this->db->query("INSERT INTO tbl_customer (customer_nama,customer_link,) VALUES ('$nama','$link')");
		return $hsl;
	}

	function update_customer($kode,$nama,$link,$photo){
		$hsl=$this->db->query("UPDATE tbl_customer SET customer_nama='$nama',customer_link='$link',customer_photo='$photo' WHERE customer_id='$kode'");
		return $hsl;
	}
	function update_customer_tanpa_img($kode,$nama,$link){
		$hsl=$this->db->query("UPDATE tbl_customer SET customer_nama='$nama',customer_link='$link' WHERE customer_id='$kode'");
		return $hsl;
	}
	function hapus_customer($kode){
		$hsl=$this->db->query("DELETE FROM tbl_customer WHERE customer_id='$kode'");
		return $hsl;
	}

	//front-end
	function customer(){
		$hsl=$this->db->query("SELECT * FROM tbl_customer");
		return $hsl;
	}
	function customer_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_customer limit $offset,$limit");
		return $hsl;
	}

}