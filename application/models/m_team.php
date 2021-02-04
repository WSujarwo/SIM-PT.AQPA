<?php 
class M_team extends CI_Model{

	function get_all_team(){
		$hsl=$this->db->query("SELECT * FROM tbl_team");
		return $hsl;
	}

	function simpan_team($nama,$link,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_team (team_nama,team_linkedin,team_photo) VALUES ('$nama','$link','$photo')");
		return $hsl;
	}
	function simpan_team_tanpa_img($nama,$link){
		$hsl=$this->db->query("INSERT INTO tbl_team (team_nama,team_linkedin) VALUES ('$nama','$link')");
		return $hsl;
	}

	function update_team($kode,$nama,$link,$photo){
		$hsl=$this->db->query("UPDATE tbl_team SET team_nama='$nama',team_linkedin='$link',team_photo='$photo' WHERE team_id='$kode'");
		return $hsl;
	}
	function update_team_tanpa_img($kode,$nama,$link){
		$hsl=$this->db->query("UPDATE tbl_team SET team_nama='$nama',team_linkedin='$link' WHERE team_id='$kode'");
		return $hsl;
	}
	function hapus_team($kode){
		$hsl=$this->db->query("DELETE FROM tbl_team WHERE team_id='$kode'");
		return $hsl;
	}

	//front-end
	function team(){
		$hsl=$this->db->query("SELECT * FROM tbl_team");
		return $hsl;
	}
	function team_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_team limit $offset,$limit");
		return $hsl;
	}

}