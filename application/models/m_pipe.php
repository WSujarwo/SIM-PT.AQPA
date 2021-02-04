<?php 
class M_pipe extends CI_Model{

	function get_all_pipe(){
		$hsl=$this->db->query("SELECT * FROM tbl_pipe");
		return $hsl;
	}

	function simpan_pipe($nama,$class,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_pipe (pipe_nama,pipe_class,pipe_photo) VALUES ('$nama','$class','$photo')");
		return $hsl;
	}
	function simpan_pipe_tanpa_img($nama,$class){
		$hsl=$this->db->query("INSERT INTO tbl_pipe (pipe_nama,pipe_class,) VALUES ('$nama','$class')");
		return $hsl;
	}

	function update_pipe($kode,$nama,$class,$photo){
		$hsl=$this->db->query("UPDATE tbl_pipe SET pipe_nama='$nama',pipe_class='$class',pipe_photo='$photo' WHERE pipe_id='$kode'");
		return $hsl;
	}
	function update_pipe_tanpa_img($kode,$nama,$class){
		$hsl=$this->db->query("UPDATE tbl_pipe SET pipe_nama='$nama',pipe_class='$class' WHERE pipe_id='$kode'");
		return $hsl;
	}
	function hapus_pipe($kode){
		$hsl=$this->db->query("DELETE FROM tbl_pipe WHERE pipe_id='$kode'");
		return $hsl;
	}

	//front-end
	function pipe(){
		$hsl=$this->db->query("SELECT * FROM tbl_pipe");
		return $hsl;
	}
	function pipe_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_pipe limit $offset,$limit");
		return $hsl;
	}

}