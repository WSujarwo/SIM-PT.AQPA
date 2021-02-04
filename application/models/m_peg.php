<?php 
class M_peg extends CI_Model{

	function get_all_peg(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}

	function simpan_peg($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_guru (peg_nip,peg_nama,peg_jenkel,peg_tmp_lahir,peg_tgl_lahir,peg_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$photo')");
		return $hsl;
	}
	function simpan_peg_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir){
		$hsl=$this->db->query("INSERT INTO tbl_guru (peg_nip,peg_nama,peg_jenkel,peg_tmp_lahir,peg_tgl_lahir) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir')");
		return $hsl;
	}

	function update_peg($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$photo){
		$hsl=$this->db->query("UPDATE tbl_guru SET peg_nip='$nip',peg_nama='$nama',peg_jenkel='$jenkel',peg_tmp_lahir='$tmp_lahir',peg_tgl_lahir='$tgl_lahir',peg_photo='$photo' WHERE peg_id='$kode'");
		return $hsl;
	}
	function update_peg_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir){
		$hsl=$this->db->query("UPDATE tbl_guru SET peg_nip='$nip',peg_nama='$nama',peg_jenkel='$jenkel',peg_tmp_lahir='$tmp_lahir',peg_tgl_lahir='$tgl_lahir' WHERE peg_id='$kode'");
		return $hsl;
	}
	function hapus_peg($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE peg_id='$kode'");
		return $hsl;
	}

	//front-end
	function peg(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function peg_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}

}